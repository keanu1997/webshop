@extends('layouts.dashboard')

@section('content')
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <i class="glyphicon glyphicon-list" id="menu-toggle"></i>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i><span class="sidebar-link">Users</span></a></li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i><span class="sidebar-link">Settings</span></a></li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i><span class="sidebar-link">Pages</a></span></li>
            </ul>
        </div>
        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h1>Dashboard</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit quos optio qui velit deserunt 
                        voluptate nostrum officia omnis similique accusantium, sunt illo numquam aut quasi expedita sequi tempore 
                        ullam. Animi autem aut corporis architecto dicta reiciendis quisquam recusandae quidem aliquid, modi a 
                        nisi ad alias deleniti sunt laborum! Quos aperiam odio, sed consequuntur aspernatur sunt culpa incidunt 
                        doloribus atque maiores aliquam, excepturi laborum obcaecati repudiandae iure quisquam ea sit voluptatibus 
                        mollitia? Dolor cumque dolores libero nihil reiciendis vitae molestias perspiciatis saepe quasi tenetur et, 
                        placeat consequatur asperiores? Assumenda, perspiciatis. Aliquam doloribus deserunt inventore asperiores 
                        repellat consequuntur aliquid deleniti fugiat perferendis. Perferendis repudiandae voluptatibus error 
                        blanditiis animi tempore maxime ea. Eaque quaerat praesentium consequatur totam quidem consectetur dolorum 
                        natus sint, officiis libero sapiente sed consequuntur eligendi possimus dignissimos eum aspernatur fugiat 
                        eos ipsa mollitia. Beatae perferendis velit et eos iure mollitia ex impedit sed, quidem modi odit, rem 
                        voluptatibus blanditiis molestias assumenda accusantium. Consectetur reiciendis dignissimos animi culpa, 
                        laborum ab repellendus nulla natus laudantium sed, doloremque eligendi eius veritatis minima molestias 
                        voluptatem adipisci quas dolorem mollitia ipsa blanditiis. Pariatur error velit voluptates illo reiciendis. 
                        Nobis dolor pariatur numquam adipisci harum sit, deserunt optio ut, mollitia laudantium accusantium 
                        blanditiis porro aperiam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- <div class="row fluid-container admin">
    <section class="col-md-2 .col-lg-2 sidebar">
           <ul>
               <li><a href="">Hello world</a></li>
           </ul>
    </section>
    <section class="col-md-10 .col-lg-10 main">
            <h2>Dashboard</h2>
    </section>
</div> -->
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
