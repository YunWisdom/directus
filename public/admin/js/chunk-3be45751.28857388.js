(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-3be45751"],{"8db2":function(t,e){t.exports={props:{id:{type:String,required:!0},name:{type:String,required:!0},value:{type:null,default:null},type:{type:String,required:!0},length:{type:[String,Number],default:null},readonly:{type:Boolean,default:!1},collection:{type:String,default:null},required:{type:Boolean,default:!1},options:{type:Object,default:()=>({})},newItem:{type:Boolean,default:!1},relation:{type:Object,default:null},fields:{type:Object,default:null},values:{type:Object,default:null},width:{type:String,default:null,validator(t){return["half","half-left","half-right","full","fill"].includes(t)}}}}},d5d7:function(t,e,n){"use strict";n.r(e);var l=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"no-wrap"},[t._v(t._s(t.displayValue))])},a=[],i=(n("96cf"),n("3b8d")),r=n("7618"),u=n("8db2"),o=n.n(u),s={mixins:[o.a],data:function(){return{loading:!1,data:null}},computed:{displayValue:function(){var t=this.value;return this.isPrimaryKey&&this.data&&!1===this.loading&&(t=this.data),t?this.$helpers.micromustache.render(this.options.template,t):"--"},isPrimaryKey:function(){return"object"!==Object(r["a"])(this.value)}},watch:{value:function(){this.isPrimaryKey&&this.fetchRelationalData()}},methods:{fetchRelationalData:function(){var t=Object(i["a"])(regeneratorRuntime.mark((function t(){var e,n,l;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:if(!(null===(e=this.relation)||void 0===e?void 0:null===(n=e.collection_one)||void 0===n?void 0:n.collection)){t.next=7;break}return this.loading=!0,t.next=4,this.$api.getItem(this.relation.collection_one.collection,this.value);case 4:l=t.sent,this.data=l.data,this.loading=!1;case 7:case"end":return t.stop()}}),t,this)})));function e(){return t.apply(this,arguments)}return e}()}},d=s,c=n("2877"),p=Object(c["a"])(d,l,a,!1,null,null,null);e["default"]=p.exports}}]);
//# sourceMappingURL=chunk-3be45751.28857388.js.map