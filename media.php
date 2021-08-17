<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            background: red;
            font-size:75px;
            text-align:center;
        }
        @media screen  and (max-width:400px){
            
          .box{
              background: blue;
              font-size:40px;
          }
        }
        @media screen  and ( min-width:400px) and (max-width:800px){
           .box{
               background: green;
               font-size:60px;
        
           }   
        }
        @media screen  (min-width:800px) and (max-width:1200px){
            
          .box{
              background: yellow;
              font-size:70px;
          }
        
        }
    </style>
</head>
<body>
    <div class="box">
        this is heading
    </div>
</body>
</html>