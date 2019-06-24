<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Aguafina+Script&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <style>
        html, body{
          margin:0;
            height:100%;
            font-family: 'Aguafina Script', cursive;
        }
        .panels{
            display:flex;
            height:100%;
        }
        .panel{
            flex:1;
            transition: 
                font-size 0.7s cubic-bezier(0.61, -0.19, 0.7, -0.11),
                flex 0.7s cubic-bezier(0.61,-0.19,0.7,-0.11),
                background 0.2s;
            height:100%;
            display: flex;
            align-items: center;
            justify-content: center;
            /* background-size:cover; */
            flex-direction:column;
            font-size: 30px;
        }
        .panel p{
            color: #fff;
            text-transform: uppercase;
            flex: 1;
            align-items: center;
            justify-content: center;
            display: flex;
            margin: 0;
            width: 100%;
        }

        .panel > *{
            transition:transform 0.5s;
        }
        .panel > p:first-child{
            transform:translateY(-100%);
        }
        .panel.active > p:last-child,
        .panel.active > p:first-child{
            transform:translateY(0);
        }
        .panel > p:last-child{
            transform:translateY(100%);
        }
        .panel1{
            background-image:url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/60c24034-b5f2-4a41-b98f-efa272dd683f/dab1hbj-bff5fc72-891e-45ce-b086-6a1342cfee3a.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzYwYzI0MDM0LWI1ZjItNGE0MS1iOThmLWVmYTI3MmRkNjgzZlwvZGFiMWhiai1iZmY1ZmM3Mi04OTFlLTQ1Y2UtYjA4Ni02YTEzNDJjZmVlM2EucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.TQxsxoarSsC-jc4aet-ybiAjSRmJcQzHRkL7H0ZKXfg')
        }
        .panel2{
            background-image:url('https://images.wallpaperscraft.com/image/bird_silhouette_vector_134154_1920x1080.jpg')
        }
        .panel3{
            background-image:url('https://i.pinimg.com/originals/a1/9b/36/a19b36b3dedd8674821b1df3235555d2.jpg')
        }
        .panel4{
            background-image:url('https://i.imgur.com/yDdtRpB.jpg')
        }
        .panel.open{
            flex:5;
            font-size:40px;
        }
    </style>
    <div class="panels">
        <div class="panel panel1">
            <p>Hey</p>
            <p>Let's</p>
            <p>Dance</p>
        </div>
        <div class="panel panel2">
            <p>Give</p>
            <p>Take</p>
            <p>Receive</p>
        </div>
        <div class="panel panel3">
            <p>Experience</p>
            <p>It</p>
            <p>Today</p>
        </div>
        <div class="panel panel4">
            <p>Give</p>
            <p>All</p>
            <p>You can</p>
        </div>
    </div>
    <script>
        const panels = document.querySelectorAll(".panel");
        function toggleActive(e){
            console.log(e)
            if(e.propertyName === 'flex-grow'){
                this.classList.toggle('active')
            } 
        }
        function toggleOpen(){
            // console.log('click')
            this.classList.toggle('open')
        }
        panels.forEach(panel => panel.addEventListener('click',toggleOpen))
        panels.forEach(panel => panel.addEventListener('transitionend',toggleActive))
    </script>
</body>
</html>