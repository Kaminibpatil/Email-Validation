<style>
    .notifi-box{
        width: 300px;
        position: absolute;
        right: 55px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        top: 60px;
        opacity: 0;
        height: 0px ;
    }
    .notifi-box h2{
        font-size: 14px;
        padding: 10px;
        border-bottom: 1px solid #eee;
        color: #999;
    }
    .notifi-box h2 span{
        color: #f00;
    }
    .notifi-item{
        display: flex;
        border-bottom: 1px solid #eee;
        padding: 5px 5px;
        margin-bottom: 5px;
        cursor: pointer;
    }
    .notifi-item:hover{
        background-color: #eee;     
    }
    .notifi-item img{
        display: block;
        width: 40px;
        height: 40px;
        margin-right: 10px;
        border-radius: 50%;
    }
    .notifi-item .text h4{
        color: #777;
        font-size: 16px;
        margin-left: 10px;
    }
    .notifi-item .text p{
        color: #aaa;
        font-size: 12px;
    }
</style>
<div onclick="toggleNotifi();">
<span>Notification</span>

</div>
<!-- notification box -->
<div class="notifi-box" id="notifi_box">
    <h2>Notification <span>17</span></h2>
    <div class="notifi-item">
        <img src="./assets/images/profile.png" alt="">
        <div class="text">
            <h4>Elias abjkhg;llkaj</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
        </div>
    </div>
    <div class="notifi-item">
        <img src="./assets/images/woman.png" alt="">
        <div class="text">
            <h4>Elias abjkhg;llkaj</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
        </div>
    </div>
    <div class="notifi-item">
        <img src="./assets/images/people.png" alt="">
        <div class="text">
            <h4>Elias abjkhg;llkaj</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
        </div>
    </div>
    <div class="notifi-item">
        <img src="./assets/images/human.png" alt="">
        <div class="text">
            <h4>Elias abjkhg;llkaj</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
        </div>
    </div>
    <div class="notifi-item">
        <img src="./assets/images/profile.png" alt="">
        <div class="text">
            <h4>Elias abjkhg;llkaj</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
        </div>
    </div>
</div>

<script>
    //notification toggle
  var notifi_box=document.getElementById("notifi_box");
  var down=false;
  
  function toggleNotifi(){
      if(down){
          notifi_box.style.height='0px';
          notifi_box.style.opacity=0;
          down=false;
      }else{
          notifi_box.style.height='500px';
          notifi_box.style.opacity=1;
          down=true;
      }
  }
  
</script>