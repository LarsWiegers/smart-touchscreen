<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Smart Touchscreen</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <div class="container">
        <div class="left">
            <div class="top-bar">
                <h2>SMART HOMEpage</h2>
            </div>
            <header>
                <img src="{{ asset('images/user.jpg')}}" alt="user">
            </header>
            <nav>
                <a href="http://192.168.1.2">
                    <i class="fa fa-address-book"></i>
                    <span class="title">Home</span>
                </a>
                <a href="http://192.168.1.3">
                    <i class="fa fa-gitlab"></i>
                    <span class="title">Gitlab</span>
                </a>
                <a href="http://192.168.1.2">
                    <i class="fa fa-home"></i>
                    <span class="title">Home Assistant</span>
                </a>
                <a href="http://192.168.1.4:32400">
                    <img src="{{ asset('images/pms-icon-800x800.png')}}" alt="plex">
                    <span class="title">Plex</span>
                </a>
            </nav>
        </div>
        <div class="right">
            <div class="top-bar"></div>
            <main>
                <div class="card">
                    <a href="http://192.168.1.2">
                        <div class="image-container">
                            <img src="{{ asset('images/vmware-exsi-logo.png')}}" />
                        </div>
                        <div class="text">
                            <h1>
                                ESXI
                            </h1>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="http://192.168.1.3">
                        <div class="image-container">
                            <img src="{{ asset('images/gitlab-banner.png')}}" />
                        </div>
                        <div class="text">
                            <h1>
                                Gitlab
                            </h1>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="http://192.168.1.5:8123">
                        <div class="image-container">
                            <img src="{{ asset('images/home-assistant-banner.png')}}" />
                        </div>
                        <div class="text">
                            <h1>
                                Home Assistant
                            </h1>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="http://192.168.1.3">
                        test
                    </a>
                </div>
                <div class="card">
                    <a href="http://192.168.1.3">
                        test
                    </a>
                </div>
                <div class="card">
                    <a href="http://192.168.1.3">
                        test
                    </a>
                </div>
                <div class="card">
                    <a href="http://192.168.1.3">
                        test
                    </a>
                </div>
                <div class="card">
                    <a href="http://192.168.1.3">
                        test
                    </a>
                </div>
                <div class="card">
                    <a href="http://192.168.1.3">
                        test
                    </a>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
