@extends('layouts.app')
@section('title')
    DashBoard
@endsection
@section('content')
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="backend/index.html"><img class="main-logo" src="backend/img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="icon nalika-menu-task"></i>
                                            </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href="backend/"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item dropdown">
                                                <a href="backend/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail nalika-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                    <div class="message-single-top">
                                                        <h1>Message</h1>
                                                    </div>
                                                    <ul class="message-menu">
                                                        <li>
                                                            <a href="backend/#">
                                                                <div class="message-img">
                                                                    <img src="backend/img/contact/1.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="backend/#">
                                                                <div class="message-img">
                                                                    <img src="backend/img/contact/4.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="backend/#">
                                                                <div class="message-img">
                                                                    <img src="backend/img/contact/3.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="backend/#">
                                                                <div class="message-img">
                                                                    <img src="backend/img/contact/2.jpg" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="message-view">
                                                        <a href="backend/#">View All Messages</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="backend/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                        <li>
                                                            <a href="backend/#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-tick" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="backend/#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-cloud" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="backend/#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-folder" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="backend/#">
                                                                <div class="notification-icon">
                                                                    <i class="icon nalika-bar-chart" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="backend/#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="backend/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span class="admin-name">Advanda Cro</span>
                                                        <i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
                                                    </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="backend/register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                    </li>
                                                    <li><a href="backend/#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                    </li>
                                                    <li><a href="backend/lock.html"><span class="icon nalika-diamond author-log-ic"></span> Lock</a>
                                                    </li>
                                                    <li><a href="backend/#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                                    </li>
                                                  <li>
  <form action="{{ route('logout') }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit" style="background: none; border: none; color: inherit; font: inherit; cursor: pointer;">
      <span class="icon nalika-unlocked author-log-ic"></span> Log Out
    </button>
  </form>
</li>

                                                </ul>
                                            </li>
                                            <li class="nav-item nav-setting-open"><a href="backend/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-menu-task"></i></a>

                                                <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                    <ul class="nav nav-tabs custon-set-tab">
                                                        <li class="active"><a data-toggle="tab" href="backend/#Notes">News</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="backend/#Projects">Activity</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="backend/#Settings">Settings</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content custom-bdr-nt">
                                                        <div id="Notes" class="tab-pane fade in active">
                                                            <div class="notes-area-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="icon nalika-chat"></i> Latest News</h2>
                                                                    <p>You have 10 New News.</p>
                                                                </div>
                                                                <div class="notes-list-area notes-menu-scrollbar">
                                                                    <ul class="notes-menu-list">
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="backend/img/contact/4.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="backend/img/contact/1.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="backend/img/contact/2.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="backend/img/contact/3.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="backend/img/contact/4.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="backend/img/contact/1.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="backend/img/contact/2.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="backend/img/contact/1.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="backend/img/contact/2.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="backend/img/contact/3.jpg" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Projects" class="tab-pane fade">
                                                            <div class="projects-settings-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="icon nalika-happiness"></i> Recent Activity</h2>
                                                                    <p> You have 20 Recent Activity.</p>
                                                                </div>
                                                                <div class="project-st-list-area project-st-menu-scrollbar">
                                                                    <ul class="projects-st-menu-list">
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New User Registered</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">1 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New Order Received</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">2 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New Order Received</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">3 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New Order Received</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">4 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New User Registered</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">5 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New Order</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">6 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New User</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">7 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="backend/#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>New Order</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">9 hours ago</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Settings" class="tab-pane fade">
                                                            <div class="setting-panel-area">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="icon nalika-gear"></i> Settings Panel</h2>
                                                                    <p> You have 20 Settings. 5 not completed.</p>
                                                                </div>
                                                                <ul class="setting-panel-list">
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show notifications</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                        <label class="onoffswitch-label" for="example">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Disable Chat</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                        <label class="onoffswitch-label" for="example3">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Enable history</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                        <label class="onoffswitch-label" for="example4">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show charts</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                        <label class="onoffswitch-label" for="example7">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Update everyday</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                        <label class="onoffswitch-label" for="example2">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Global search</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                        <label class="onoffswitch-label" for="example6">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Offline users</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                        <label class="onoffswitch-label" for="example5">
                                                                                                <span class="onoffswitch-inner"></span>
                                                                                                <span class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="backend/#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="backend/index.html">Dashboard v.1</a></li>
                                            <li><a href="backend/index-1.html">Dashboard v.2</a></li>
                                            <li><a href="backend/index-3.html">Dashboard v.3</a></li>
                                            <li><a href="backend/product-list.html">Product List</a></li>
                                            <li><a href="backend/product-edit.html">Product Edit</a></li>
                                            <li><a href="backend/product-detail.html">Product Detail</a></li>
                                            <li><a href="backend/product-cart.html">Product Cart</a></li>
                                            <li><a href="backend/product-payment.html">Product Payment</a></li>
                                            <li><a href="backend/analytics.html">Analytics</a></li>
                                            <li><a href="backend/widgets.html">Widgets</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demo" href="backend/#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a href="backend/mailbox.html">Inbox</a>
                                            </li>
                                            <li><a href="backend/mailbox-view.html">View Mail</a>
                                            </li>
                                            <li><a href="backend/mailbox-compose.html">Compose Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#others" href="backend/#">Miscellaneous <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="others" class="collapse dropdown-header-top">
                                            <li><a href="backend/file-manager.html">File Manager</a></li>
                                            <li><a href="backend/contacts.html">Contacts Client</a></li>
                                            <li><a href="backend/projects.html">Project</a></li>
                                            <li><a href="backend/project-details.html">Project Details</a></li>
                                            <li><a href="backend/blog.html">Blog</a></li>
                                            <li><a href="backend/blog-details.html">Blog Details</a></li>
                                            <li><a href="backend/404.html">404 Page</a></li>
                                            <li><a href="backend/500.html">500 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="backend/#">Interface <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="backend/google-map.html">Google Map</a>
                                            </li>
                                            <li><a href="backend/data-maps.html">Data Maps</a>
                                            </li>
                                            <li><a href="backend/pdf-viewer.html">Pdf Viewer</a>
                                            </li>
                                            <li><a href="backend/x-editable.html">X-Editable</a>
                                            </li>
                                            <li><a href="backend/code-editor.html">Code Editor</a>
                                            </li>
                                            <li><a href="backend/tree-view.html">Tree View</a>
                                            </li>
                                            <li><a href="backend/preloader.html">Preloader</a>
                                            </li>
                                            <li><a href="backend/images-cropper.html">Images Cropper</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Chartsmob" href="backend/#">Charts <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Chartsmob" class="collapse dropdown-header-top">
                                            <li><a href="backend/bar-charts.html">Bar Charts</a>
                                            </li>
                                            <li><a href="backend/line-charts.html">Line Charts</a>
                                            </li>
                                            <li><a href="backend/area-charts.html">Area Charts</a>
                                            </li>
                                            <li><a href="backend/rounded-chart.html">Rounded Charts</a>
                                            </li>
                                            <li><a href="backend/c3.html">C3 Charts</a>
                                            </li>
                                            <li><a href="backend/sparkline.html">Sparkline Charts</a>
                                            </li>
                                            <li><a href="backend/peity.html">Peity Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="backend/#">Tables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Tablesmob" class="collapse dropdown-header-top">
                                            <li><a href="backend/static-table.html">Static Table</a>
                                            </li>
                                            <li><a href="backend/data-table.html">Data Table</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#formsmob" href="backend/#">Forms <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="formsmob" class="collapse dropdown-header-top">
                                            <li><a href="backend/basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="backend/advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="backend/password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="backend/multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="backend/tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="backend/dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Appviewsmob" href="backend/#">App views <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                            <li><a href="backend/basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="backend/advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="backend/password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="backend/multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="backend/tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="backend/dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="backend/#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            <li><a href="backend/login.html">Login</a>
                                            </li>
                                            <li><a href="backend/register.html">Register</a>
                                            </li>
                                            <li><a href="backend/lock.html">Lock</a>
                                            </li>
                                            <li><a href="backend/password-recovery.html">Password Recovery</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-wp">
                                        <div class="breadcomb-icon">
                                            <i class="icon nalika-home"></i>
                                        </div>
                                        <div class="breadcomb-ctn">
                                            <h2>Welcome Back to Admin <span class="bread-ntd">Dashboard</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcomb-report">
                                        <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-admin container-fluid">
        <div class="row admin text-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                            <h4 class="text-left text-uppercase"><b>Orders</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="col-xs-3 mar-bot-15 text-left">
                                    <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">10,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 78%;" class="progress-bar bg-green"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">5,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Revenue</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">$70,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-blue"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                            <h4 class="text-left text-uppercase"><b>Yearly Sales</b></h4>
                            <div class="row vertical-center-box vertical-center-box-tablet">
                                <div class="text-left col-xs-3 mar-bot-15">
                                    <label class="label bg-purple">80% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                </div>
                                <div class="col-xs-9 cus-gh-hd-pro">
                                    <h2 class="text-right no-margin">$100,000</h2>
                                </div>
                            </div>
                            <div class="progress progress-mini">
                                <div style="width: 60%;" class="progress-bar bg-purple"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject text-uppercase"><b>Product Sales</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp">
                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-grey active">
                                                <input type="radio" name="options" class="toggle" id="option1" checked="">Today</label>
                                            <label class="btn btn-grey">
                                                <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="sparklinehome" class="sparkline-container">Loading..</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
                        <h3 class="box-title">Total Visit</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash"></div>
                            </li>
                            <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">8659</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs mg-b-30">
                        <h3 class="box-title">Total Page Views</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash2"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">7469</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs mg-b-30">
                        <h3 class="box-title">Unique Visitor</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash3"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">6011</span></li>
                        </ul>
                    </div>
                    <div class="white-box analytics-info-cs">
                        <h3 class="box-title">Bounce Rate</h3>
                        <ul class="list-inline two-part-sp">
                            <li>
                                <div id="sparklinedash4"></div>
                            </li>
                            <li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="sales-sts-ctn">18%</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2025 <a href="https://colorlib.com/wp/templates/">TriA Tech</a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
