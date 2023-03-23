<!DOCTYPE html>
<html lang="th-TH">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" >
        <title>Test </title>
        <link rel="stylesheet"  href="main.css">
        
    </head>
    <body>
        <div class="bar">
            <div class="logo">
                <img src="UserImg/Clicknext logo.png">
            </div>
            <div class="profile">
                
            </div>
        </div>
        

        <div class="navigation">
            <ul>
                <li class="list active">
                    <a href="#">
                        <span class="icon">&nbsp&nbsp&nbsp<ion-icon name="newspaper-outline"></ion-icon></ion-icon>
                        </span>
                        <span class="title">หน้าหลัก</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">&nbsp&nbsp&nbsp<ion-icon name="settings-outline"></ion-icon><ion-icon name="cube-outline"></ion-icon>
                        </span>
                        
                        <span class="title">เเจ้งซ่อม/เเจ้งเบิก</span>
                    </a>
                </li>
            </ul>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
            let list = document.querySelectorAll('.list');
            for(let i = 0; i<list.length; i++){
                list[i].onclick = function(){
                    let j = 0;
                    while(j < list.length){
                        list[j++].className = 'list';
                    }
                    list[i].className = 'list active'
                }
            }
        </script>

        <div class="name">
            {{ Auth::user()->email }}
            user
        </div>
        <div class="logout">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </div>
          
    </body>
</html>