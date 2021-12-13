<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
.attr::before{
    content:attr(data-content);
}

.calc{
    background:aquamarine;
    width: calc(100%-50px);
}
.linear-gradient{
    background: rgb(34,193,195);
background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(150,253,45,1) 100%);

}
.image{
    position: relative;
    max-width: 500px;
}
.image img{
    width: 500px;
}
.image:hover{
   /* transform: scale(1,2);    /*zoom ra*/
   /* transform: skew(0deg,20deg);*/   /*nghiêng hình*/
  /* transform: rotate(20deg); */
   transform: translate(60px,50px);
}

.image .capture{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,0.5);
    padding: 10px;
    color: #fff;
} 

.row .col-3{
    float: left;
    width: 25%;
    padding: 0 10px;
    
}

.row .inner{
    background:cornflowerblue;
    text-align: center;
    font-size: 15px;
    font-weight: bold;
    padding: 20px 40px;
    border-radius: 4px;
}

/* 1023, 767, 479*/
@media screen and (max-width:1023px){  /* 1023*/
    .row .col-3{
        width: 33.3333333%;
    }
}
@media screen and (max-width:766px){  /*  767*/
    .row .col-3{
        width: 50%;
    }
}
@media screen and (max-width:478px){  /*  479*/
    .row .col-3{
        width: 100%;
    }
}
</style>
</head>
<body>

<h2 class="attr" data-content="hello">quynh</h2>
<h3 class="calc" data-content="team php!">hello</h3>
<h2 class="linear-gradient">xin chào mọi người</h2>
    <div class="image">
    <img src="https://thuthuatnhanh.com/wp-content/uploads/2021/06/hinh-anh-con-soi-1.jpg" alt="image">
    <h3 class="capture">CSS Gradient is a happy little website and free tool that lets you</h3>
    </div>
    <ul class="row">
        <li class="col-3">
            <div class="inner">GOOGLE</div>
        </li>
        <li class="col-3">
            <div class="inner">COCCOC</div>
        </li>
        <li class="col-3">
            <div class="inner">INTERNET</div>
        </li>
        <li class="col-3">
            <div class="inner">BROWERS</div>
        </li>
    </ul>
</body>
</html>