<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body>
    <style>
        .container .baner{
            background-color:darkgoldenrod;
            width: auto;
            height: 40px;
        }
        
        
        .container .form-login h1 {
            text-align: center;
        }
        .container .form-login p {
            text-align: center;
        }
        .container .form-login .login {
            text-align: center;
            padding: 10px;
           

        }
      

        .container .form-login .menu ul li a{
            
            text-decoration: none;
        }
        .container .form-login .menu ol {
            float: left;
        }
        .container .form-login .login textarea{
            width: 35%;;
            height: 100px;
           
        }
        input[type="text"], [type="email"] ,[type="password"]  {
       width: 30%;
       height: 40px;
        padding: 10px;
       

        }
       
        .container .form-login .btn-dangnhap {
            text-align: center;
        }
        .container .bang tr td{
            text-align: center;
            border: 1px solid black;
            
        }
        .container .bang tr th{
            border: 1px solid black;
        }
       main{
          padding-left: 300px;
        }
           .footer{
            background-color: red;
            background-size: 100%;
            width: 100%;
            height: 80px;
        }
        .container{
            max-width: 100%;
            max-height: 100%;
            padding: 0;
            margin: 0;
        }
        address {
            text-align: center;
        }
    </style>
<form action="" method="GET">
    <div class="container">
   
        <div class="baner">
       
        </div>
    
    <div class="form-login">
    <div class="menu">
    <aside>     <!--x??c ?????nh m???t s??? n???i dung ngo??i n???i dung m?? n?? ???????c ?????t trong ????.  -->
            <p style="width:30%; float:right;"> The Epcot center is a theme park at Walt Disney World Resort featuring exciting
                 attractions, international pavilions, award-winning fireworks and seasonal special events</p>
        </aside>
        <section>  <!--m???t ph???n trong t??i li???u  -->
            <h2>N???i dung</h2>
            <p>The World Wide Fund for Nature (WWF) is an international organization working on issues regarding the conservatio</p>
        </section>
        <article>   <!--ch??? ?????nh n???i dung ?????c l???p  -->
  <h2>Google Chrome</h2>
  <p>Google Chrome is a web browser developed by Google, released in 2008.</p>
</article>

       
       
    <ul>
            <li><a href="#">GOOGLE</a></li>
            <li><a href="#">COCCOC</a></li>
            <li><a href="#">BROWSER</a></li>
            <li><a href="#">INTERNET</a></li>
            
        </ul>
        <nav> <!-- t???p h???p c??c li??n k???t ??i???u h?????ng  -->
            <a href="#">VSCODE</a>
        </nav>
        <ol>
            <li><i>Ti???ng vi???t </i></li>
            <li><i>??n </i></li>
            <li><i>Sinh h???c </i></li>
            <li><i>Ho?? h???c </i></li>
            
        </ol>
        <br>
       
        </div>
  
    <h1> ????NG K?? </h1>
    <address>Ph?????ng Th???c Gi??n</address>
    <p> 
        <span>
        register
        </span>
        <time>21:00</time>
        
    </p>
    
 
    <div class="login">
        <label for="tai-khoan" >T??n ????ng nh???p</label>
        <input type="email" id="tai-khoan" name="tai_khoan">
    </div>
     <div class="login">
        <label for=""  >M???t kh???u </label>
        <input type="password" name="passworld">
    </div>
    <div class="login">
        <label for="">Ngh??? nghi???p</label>
        <input type="text" name="nghe-nghiep">
    </div>
    <div class="login">
        <label for="">?????a ch???</label>
        <select name="" id="">
            <option>Qu???ng Ng??i</option>
            <option>B??nh ?????nh</option>
            <option>Qu???ng Nam</option>
            <option>Qu???ng Tr???</option>
        </select>
    </div>
    <div class="login">
        <label for="">Gi???i t??nh</label>
        
        <label  for="">Nam
        <input type="radio" name="gioi-tinh">
        </label>
        <label  for="">N???
        <input type="radio" name="gioi-tinh">
        </label>
       
    </div>
    <div class="login">
        <label for="" style="padding-left: 120px;">Ghi ch??</label>
        <textarea >  </textarea>
    </div>
    <div class="login">
        <label for="">Nh??? M???t kh???u</label>
        <input type="checkbox" name="nho-mk">
    </div>
    <div class="btn-dangnhap">
        <input type="submit" id="dang-nhap" value="????ng nh???p" name="btn-dangnhap">
        <button>????ng k??</button>
        
    </div>
    
    </div>
    <br>
    <hr>
    <div class="" style="text-align: center;">

     <iframe src="#"> </iframe>     <!--tr??? ?????n trang 1 web b??n trong trang web  -->
    <img src="https://img-cache.coccoc.com/image2?i=4&l=56/627909779">
    <h3>Video</h3>
    <video  width="320" height="240" controls>  
    <source src="https://www.youtube.com/watch?v=RS7IzU2VJIQ" type="video/mp4">
  <source src="./assets/img/bunny.mp4" type="video/ogg">
  
     </video>
    </div>
    <main >
        <div class="form-bang" >
        <table class="bang" >
            <thead>

                <tr>
                    <td>id</td>
                    <td>H??? t??n</td>
                    <td>email</td>
                    <td>Ngh??? Nghi???p</td>
                    <td>?????a ch???</td>
                    <td> <strong>X??? l??</strong> </td>
                </tr>
            </thead>
            <tbody>
            <tfoot>
                <tr>
                    <th> 01 </th>
                    <th> H??? Thanh Qu???nh </th>
                    <th> hothanhquynh446@gmail.com </th>
                    <th> Sinh vi??n </th>
                    <th> Qu???ng Ng??i </th>
                    <th>
                    <a href="#" class="btn btn-success"><i class="fas fa-plus-circle"></i></a>
                         <button type="button" name="button" id="button" class="btn btn-danger" onclick="">Xo?? </button>
                </th>

                </tr>
            </tfoot>
            </tbody>
        </table>
        <br>
        </div>
    </main>
    <footer  >
        <div class="footer" >
              
        </div>
</footer>
</div>
</form>
</body>
</html>