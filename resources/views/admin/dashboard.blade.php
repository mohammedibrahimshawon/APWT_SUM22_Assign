<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Dashboard</title>

</head>

<body>

    <div class="container-1">
        <div class="header">
         
                <i class="fas fa-envelope fa-lg"></i>
                <span class="badge rounded-pill badge-notification bg-danger" style="color:#fff;">4</span>
            </a>
 
           
                <ul>
                    <li><b>{{session('uname')}}</b></li>
                    <li><a href="{{ route('admin.myProfile') }}"><i class="flaticon-user" aria-hidden="true"
                                style="padding-right: 15px;"></i>My profile</a></li>
                    <li><a href="{{ route('admin.changePassword') }}"><i class="flaticon-padlock" aria-hidden="true"
                                style="padding-right: 15px;"></i>Change Password</a></li>
                    <li><a href="{{ route('logout') }}"><i class="flaticon-logout" aria-hidden="true"
                                style="padding-right: 15px;"></i>logout</a></li>
                </ul>
            </div>
        </div>
        <div class="menu">
            <ul>
                <br>
                <p class="h5" ></i>E-Pharmacy
                </p>
                <br>
                <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-desktop" aria-hidden="true"
                            style="padding-right: 15px;"></i><span>Dashboard</span></a></li>

         
 

                

            </ul>
        </div>
      
        </div>
    </div>

    <script>
        document.querySelector('.fas').addEventListener('click', function() {
            document.querySelector(".badge").clear();
        });
        $(window).on('load', function() {
            $('.badge').hide();
        });
    </script>
</body>

</html>
