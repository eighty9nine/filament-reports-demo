"use strict";(self.webpackChunkdocs=self.webpackChunkdocs||[]).push([[81],{7673:(e,t,n)=>{n.r(t),n.d(t,{assets:()=>d,contentTitle:()=>a,default:()=>u,frontMatter:()=>s,metadata:()=>c,toc:()=>l});var r=n(5893),i=n(1151),o=n(2991);const s={},a="Header",c={id:"header/index",title:"Header",description:"The header is the tompmost part of the report. In the header, you can put the report title subtitle, logo and more.",source:"@site/docs/03-header/index.md",sourceDirName:"03-header",slug:"/header/",permalink:"/docs/header/",draft:!1,unlisted:!1,tags:[],version:"current",frontMatter:{},sidebar:"sidebar",previous:{title:"Getting Started",permalink:"/docs/getting-started"},next:{title:"Header Column",permalink:"/docs/header/header-column"}},d={},l=[{value:"Components",id:"components",level:2}];function h(e){const t={a:"a",admonition:"admonition",h1:"h1",h2:"h2",li:"li",p:"p",ul:"ul",...(0,i.a)(),...e.components};return(0,r.jsxs)(r.Fragment,{children:[(0,r.jsx)(t.h1,{id:"header",children:"Header"}),"\n",(0,r.jsx)(t.p,{children:"The header is the tompmost part of the report. In the header, you can put the report title subtitle, logo and more."}),"\n",(0,r.jsx)(t.admonition,{type:"info",children:(0,r.jsx)(t.p,{children:"More configurations will be added for the header sections, and hence the seggregation or compartmentalization of the header into a separate section. This will allow for more flexibility in the future to add things such as background images, etc."})}),"\n",(0,r.jsx)(t.h2,{id:"components",children:"Components"}),"\n",(0,r.jsx)(t.p,{children:"In the header, you can place the following components:"}),"\n",(0,r.jsxs)(t.ul,{children:["\n",(0,r.jsx)(t.li,{children:(0,r.jsx)(t.a,{href:"/docs/components/text",children:"Text"})}),"\n",(0,r.jsx)(t.li,{children:(0,r.jsx)(t.a,{href:"/docs/components/image",children:"Image"})}),"\n",(0,r.jsx)(t.li,{children:(0,r.jsx)(t.a,{href:"/docs/components/vertical-space",children:"Vertical Space"})}),"\n"]}),"\n",(0,r.jsx)(t.p,{children:"Or use the following layouts to arrange the components:"}),"\n",(0,r.jsxs)(t.ul,{children:["\n",(0,r.jsx)(t.li,{children:(0,r.jsx)(t.a,{href:"/docs/header/header-row",children:"Header Row"})}),"\n",(0,r.jsx)(t.li,{children:(0,r.jsx)(t.a,{href:"/docs/header/header-column",children:"Header Column"})}),"\n"]}),"\n",(0,r.jsx)(t.admonition,{type:"tip",children:(0,r.jsx)(t.p,{children:"If you want to ignore the header on a specific page, you can remove this method altogether, or you can leave it as is when created, where it has an empty schema."})}),"\n",(0,r.jsx)(o.Z,{})]})}function u(e={}){const{wrapper:t}={...(0,i.a)(),...e.components};return t?(0,r.jsx)(t,{...e,children:(0,r.jsx)(h,{...e})}):h(e)}},2991:(e,t,n)=>{n.d(t,{Z:()=>j});n(7294);var r=n(512),i=n(3438),o=n(9960),s=n(3919),a=n(5999),c=n(2503);const d={cardContainer:"cardContainer_fWXF",cardTitle:"cardTitle_rnsV",cardDescription:"cardDescription_PWke"};var l=n(5893);function h(e){let{href:t,children:n}=e;return(0,l.jsx)(o.Z,{href:t,className:(0,r.Z)("card padding--lg",d.cardContainer),children:n})}function u(e){let{href:t,icon:n,title:i,description:o}=e;return(0,l.jsxs)(h,{href:t,children:[(0,l.jsxs)(c.Z,{as:"h2",className:(0,r.Z)("text--truncate",d.cardTitle),title:i,children:[n," ",i]}),o&&(0,l.jsx)("p",{className:(0,r.Z)("text--truncate",d.cardDescription),title:o,children:o})]})}function m(e){let{item:t}=e;const n=(0,i.LM)(t);return n?(0,l.jsx)(u,{href:n,icon:"\ud83d\uddc3\ufe0f",title:t.label,description:t.description??(0,a.I)({message:"{count} items",id:"theme.docs.DocCard.categoryDescription",description:"The default description for a category card in the generated index about how many items this category includes"},{count:t.items.length})}):null}function p(e){let{item:t}=e;const n=(0,s.Z)(t.href)?"\ud83d\udcc4\ufe0f":"\ud83d\udd17",r=(0,i.xz)(t.docId??void 0);return(0,l.jsx)(u,{href:t.href,icon:n,title:t.label,description:t.description??r?.description})}function f(e){let{item:t}=e;switch(t.type){case"link":return(0,l.jsx)(p,{item:t});case"category":return(0,l.jsx)(m,{item:t});default:throw new Error(`unknown item type ${JSON.stringify(t)}`)}}function x(e){let{className:t}=e;const n=(0,i.jA)();return(0,l.jsx)(j,{items:n.items,className:t})}function j(e){const{items:t,className:n}=e;if(!t)return(0,l.jsx)(x,{...e});const o=(0,i.MN)(t);return(0,l.jsx)("section",{className:(0,r.Z)("row",n),children:o.map(((e,t)=>(0,l.jsx)("article",{className:"col col--6 margin-bottom--lg",children:(0,l.jsx)(f,{item:e})},t)))})}},1151:(e,t,n)=>{n.d(t,{Z:()=>a,a:()=>s});var r=n(7294);const i={},o=r.createContext(i);function s(e){const t=r.useContext(o);return r.useMemo((function(){return"function"==typeof e?e(t):{...t,...e}}),[t,e])}function a(e){let t;return t=e.disableParentContext?"function"==typeof e.components?e.components(i):e.components||i:s(e.components),r.createElement(o.Provider,{value:t},e.children)}}}]);