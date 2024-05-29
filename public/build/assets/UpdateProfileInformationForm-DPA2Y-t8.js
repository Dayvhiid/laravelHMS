import{T as j,d as f,o as d,c as w,w as a,g as r,e as S,a as l,b as o,l as p,z as v,E as B,i as h,f as _,u as t,j as E,n as z,O as A}from"./app-e89IPxF8.js";import{_ as F}from"./ActionMessage-BppSLQLM.js";import{_ as O}from"./FormSection-CJJw8CAn.js";import{a as g,_ as V}from"./TextInput-9Le1GHj2.js";import{_ as k}from"./InputLabel-B8B9aL_l.js";import{_ as R}from"./PrimaryButton-DHPOmX8X.js";import{_ as $}from"./SecondaryButton-B4rXROCg.js";import"./SectionTitle-DaAXwBVx.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const T={key:0,class:"col-span-6 sm:col-span-4"},q={class:"mt-2"},D=["src","alt"],L={class:"mt-2"},M={class:"col-span-6 sm:col-span-4"},Y={class:"col-span-6 sm:col-span-4"},G={key:0},H={class:"text-sm mt-2"},J={class:"mt-2 font-medium text-sm text-green-600"},ae={__name:"UpdateProfileInformationForm",props:{user:Object},setup(u){const y=u,e=j({_method:"PUT",name:y.user.name,email:y.user.email,photo:null}),b=f(null),m=f(null),n=f(null),x=()=>{n.value&&(e.photo=n.value.files[0]),e.post(route("user-profile-information.update"),{errorBag:"updateProfileInformation",preserveScroll:!0,onSuccess:()=>P()})},C=()=>{b.value=!0},I=()=>{n.value.click()},N=()=>{const s=n.value.files[0];if(!s)return;const i=new FileReader;i.onload=c=>{m.value=c.target.result},i.readAsDataURL(s)},U=()=>{A.delete(route("current-user-photo.destroy"),{preserveScroll:!0,onSuccess:()=>{m.value=null,P()}})},P=()=>{var s;(s=n.value)!=null&&s.value&&(n.value.value=null)};return(s,i)=>(d(),w(O,{onSubmitted:x},{title:a(()=>[r(" Profile Information ")]),description:a(()=>[r(" Update your account's profile information and email address. ")]),form:a(()=>[s.$page.props.jetstream.managesProfilePhotos?(d(),S("div",T,[l("input",{id:"photo",ref_key:"photoInput",ref:n,type:"file",class:"hidden",onChange:N},null,544),o(k,{for:"photo",value:"Photo"}),p(l("div",q,[l("img",{src:u.user.profile_photo_url,alt:u.user.name,class:"rounded-full h-20 w-20 object-cover"},null,8,D)],512),[[v,!m.value]]),p(l("div",L,[l("span",{class:"block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center",style:B("background-image: url('"+m.value+"');")},null,4)],512),[[v,m.value]]),o($,{class:"mt-2 me-2",type:"button",onClick:h(I,["prevent"])},{default:a(()=>[r(" Select A New Photo ")]),_:1}),u.user.profile_photo_path?(d(),w($,{key:0,type:"button",class:"mt-2",onClick:h(U,["prevent"])},{default:a(()=>[r(" Remove Photo ")]),_:1})):_("",!0),o(g,{message:t(e).errors.photo,class:"mt-2"},null,8,["message"])])):_("",!0),l("div",M,[o(k,{for:"name",value:"Name"}),o(V,{id:"name",modelValue:t(e).name,"onUpdate:modelValue":i[0]||(i[0]=c=>t(e).name=c),type:"text",class:"mt-1 block w-full",required:"",autocomplete:"name"},null,8,["modelValue"]),o(g,{message:t(e).errors.name,class:"mt-2"},null,8,["message"])]),l("div",Y,[o(k,{for:"email",value:"Email"}),o(V,{id:"email",modelValue:t(e).email,"onUpdate:modelValue":i[1]||(i[1]=c=>t(e).email=c),type:"email",class:"mt-1 block w-full",required:"",autocomplete:"username"},null,8,["modelValue"]),o(g,{message:t(e).errors.email,class:"mt-2"},null,8,["message"]),s.$page.props.jetstream.hasEmailVerification&&u.user.email_verified_at===null?(d(),S("div",G,[l("p",H,[r(" Your email address is unverified. "),o(t(E),{href:s.route("verification.send"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500",onClick:h(C,["prevent"])},{default:a(()=>[r(" Click here to re-send the verification email. ")]),_:1},8,["href"])]),p(l("div",J," A new verification link has been sent to your email address. ",512),[[v,b.value]])])):_("",!0)])]),actions:a(()=>[o(F,{on:t(e).recentlySuccessful,class:"me-3"},{default:a(()=>[r(" Saved. ")]),_:1},8,["on"]),o(R,{class:z({"opacity-25":t(e).processing}),disabled:t(e).processing},{default:a(()=>[r(" Save ")]),_:1},8,["class","disabled"])]),_:1}))}};export{ae as default};
