<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
  use Illuminate\Support\Facades\Log;

class CheckAllowedIpRange
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }


  

// public function handle(Request $request, Closure $next)
// {
//     // Example: Allow multiple specific IPs
//     $allowedIps = [
//         '192.168.1.100',       // Single IP
//         '192.168.1.101',       // Another single IP
//          '102.89.34.94',
//         // '127.0.0.1'
//         '192.168.0.214',
//     ];

//     $currentIp = $request->ip();

//     // Check if IP matches any allowed rule
//     if (!$this->isIpAllowed($currentIp, $allowedIps)) {
//         Log::warning("Blocked CRUD attempt from unauthorized IP: $currentIp");
//         abort(403, 'Your IP is not allowed to perform this action.');
//     }

//     return $next($request);
// }

// /**
//  * Check if IP matches any allowed rule (single IP, CIDR, or range).
//  */
// private function isIpAllowed(string $ip, array $allowedIps): bool
// {
//     foreach ($allowedIps as $allowedIp) {
//         // Check for CIDR (e.g., '192.168.1.0/24')
//         if (str_contains($allowedIp, '/')) {
//             if ($this->checkIpInCidr($ip, $allowedIp)) {
//                 return true;
//             }
//         }
//         // Check for range (e.g., '10.0.0.0-10.0.255.255')
//         elseif (str_contains($allowedIp, '-')) {
//             if ($this->checkIpInRange($ip, $allowedIp)) {
//                 return true;
//             }
//         }
//         // Exact IP match
//         elseif ($ip === $allowedIp) {
//             return true;
//         }
//     }

//     return false;
// }

// /**
//  * Check if IP falls within a CIDR range.
//  */
// private function checkIpInCidr(string $ip, string $cidr): bool
// {
//     [$subnet, $mask] = explode('/', $cidr);
//     $ipLong = ip2long($ip);
//     $subnetLong = ip2long($subnet);
//     $maskLong = ~((1 << (32 - $mask)) - 1);

//     return ($ipLong & $maskLong) === ($subnetLong & $maskLong);
// }

// /**
//  * Check if IP falls within a start-end range.
//  */
// private function checkIpInRange(string $ip, string $range): bool
// {
//     [$start, $end] = explode('-', $range);
//     $ipLong = ip2long($ip);
//     $startLong = ip2long(trim($start));
//     $endLong = ip2long(trim($end));

//     return $ipLong >= $startLong && $ipLong <= $endLong;
// }




public function handle(Request $request, Closure $next)
{
    // Example: Allow specific public IPs (replace with your allowed IPs)
    $allowedPublicIps = [
        '203.0.113.45',       // Your office/public IP
        '102.89.34.94',       // Another allowed public IP
        '198.51.100.0/24',    // CIDR range (e.g., company VPN)
        '192.0.2.100-192.0.2.200', // IP range
    ];

    // Get the client's **true public IP** (handles proxies correctly)
    $clientPublicIp = $this->getClientPublicIp($request);

    // Check if IP is allowed
    if (!$this->isIpAllowed($clientPublicIp, $allowedPublicIps)) {
        Log::warning("Blocked CRUD attempt from unauthorized public IP: $clientPublicIp");
        abort(403, 'Your IP is not allowed to perform this action.');
    }

    return $next($request);
}

/**
 * Get the client's true public IP (even behind proxies like Cloudflare).
 */
private function getClientPublicIp(Request $request): string
{
    // Priority: Trusted proxy headers (if using Cloudflare/Load Balancer)
    $trustedProxyHeaders = [
        'CF-Connecting-IP', // Cloudflare
        'X-Forwarded-For',  // General proxies
        'X-Real-IP',        // Nginx
    ];

    foreach ($trustedProxyHeaders as $header) {
        if ($request->hasHeader($header)) {
            $ips = explode(',', $request->header($header));
            return trim($ips[0]); // First IP in X-Forwarded-For is the original client
        }
    }

    // Fallback to default Laravel IP detection
    return $request->ip();
}

/**
 * Check if IP matches allowed rules (CIDR, range, or exact).
 */
private function isIpAllowed(string $ip, array $allowedIps): bool
{
    foreach ($allowedIps as $allowedIp) {
        if (str_contains($allowedIp, '/')) {
            if ($this->checkIpInCidr($ip, $allowedIp)) {
                return true;
            }
        } elseif (str_contains($allowedIp, '-')) {
            if ($this->checkIpInRange($ip, $allowedIp)) {
                return true;
            }
        } elseif ($ip === $allowedIp) {
            return true;
        }
    }

    return false;
}

// Keep the existing `checkIpInCidr()` and `checkIpInRange()` methods.
}
