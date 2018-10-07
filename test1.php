<style type="text/css">
	

/*bb*/
td, th {
    vertical-align: middle !important;
    }
.left, .right {
        float:left;
        height:49vh;
    }
    
.left {
        background: #337ab7;
        display: inline-block;
        white-space: nowrap;
        width: 50px;
        transition: width 1s ;
    }

.right {
        background: #fff;
        width: 350px;
        transition: width 1s;
        border-style:solid;
        border-color:#ccc;
        border-width:1px;
    }    

.left:hover {
        width: 88px;
    }    
    
.item:hover {
        background-color:#ccc;
        }
        
.left .glyphicon {
        margin:15px;
        width:20px;
        color:#fff;
    }
    
.right .glyphicon {
        color:#a9a9a9;
    }
span.glyphicon.glyphicon-refresh{
    font-size:17px;
    vertical-align: middle !important;
    }
    
.item {
        height:50px;
        overflow:hidden;
        color:#fff;
    }
.title {
        background-color:#eee;
        border-style:solid;
        border-color:#ccc;
        border-width:1px;
        box-sizing: border-box;
    }
.search:hover {
        border-color:#4aa9fb;
        border-width:1px;
    }
.search {
    padding:3px 8px 3px !important;
    }
input[type=search] {
    padding: 10px 0px 10px;
  border: 0px solid #fff;
  background: #eee;
  -webkit-appearance: none;
    width:90%;
    float:none;
}
input[type=search]:focus {
    outline:none;
    }
.type{
    height: 47px;;
    }
.date{
    background-color:#f7f7f7
    }
.docdate {
    vertical-align:bottom !important;
    }
.distr {
    margin: 0 0 5px;
    font-size: 12px;
    }
.ndoc {
    margin: 0 0 5px;
    }
.storage {
    margin: 0;
    color: #aaa !important;
    font-size: 12px;
    }
        
    

</style>

<div class="left">
<div class="item">
<span class="glyphicon glyphicon-th-large"></span>
</div>
<div class="item active">
<span class="glyphicon glyphicon-th-list"></span>
    Все</div>
<div class="item">
<span class="glyphicon glyphicon-log-out"></span>
    Рас</div>
<div class="item">
<span class="glyphicon glyphicon-log-in"></span>
    При</div> 
<div class="item">
<span class="glyphicon glyphicon-random"></span>
    Акт</div>
<div class="item">
<span class="glyphicon glyphicon-remove"></span>
    Акт</div>    
</div>