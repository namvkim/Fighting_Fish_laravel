<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .container{
        width: 85vh;
    }
    .header{
        background-color: #FFCC33;
        height: 15vh;
        position: relative;
        
    }
    .footer{
        background-color: #FFCC33;
        height: 12vh;
        font-size: 20px;
        text-align: center;
        vertical-align: middle;
    }
    .header img{
        width: 25vh;
        height: 8vh;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }
    .title{
        background-color: #3498db;
        font-size: 30px;
        color: white;
        height: 7vh;
        padding: 10px 10px;   
    }  
    .content{
        background-color: #F5F5F5;
        font-size: 20px;
        color:black;
        height: 50vh;
        padding: 10px 10px;  
    }
</style>
</head>



<body>
    <div class="container">
        <div class="header">
          <img src="https://i.ibb.co/p4yK3np/logo-vi.png"> </img> 
        </div>
        <div class="title">
                {{ $data['title'] }}
        </div>

        <div class="content">
            <p>
                {{ $data['name'] }}
            </p>
            <p>
                {{ $data['body'] }}
            </p>
            
            <p>
                {{ $data['conclusion'] }}
            </p>

            <p>
            Should your need further information, kindly visit our facebook:  https://www.facebook.com/PNVtuyensinh/  or contact us at phone number: 0966727591 (Ms. Diep)
            </p>

            <p>
                Yours sincerely,
                <p>
                Passerelles Numériques Vietnam
                </p>
            </p>
           
        </div>
        <div class="footer">   
            <div> © Passerelles numériques 2021</div>
            <div>99 To Hien Thanh street, Phuoc My awards, Son Tra district, Da Nang</div>
        </div>
    </div>
</body>
</html>