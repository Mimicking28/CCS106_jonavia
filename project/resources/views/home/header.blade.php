<style>    
    .dropdown {
        float: left;
        overflow: initial;
    }

    /* Style the dropdown button to fit inside the topnav */
    .dropdown   .dropbtn {
        font-size: 17px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    /* Style the dropdown content (hidden by default) */
    .dropdown-content {
        display: flex;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Style the links inside the dropdown */
    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }
    </style>

<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/home" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">Capitol Valley University</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/home" class="nav-item nav-link active">Home</a>
                <a href="/dashboard" class="nav-item nav-link">Dashboard</a>
            </div>
            <div class="nav-item dropdown">
                            <a  class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-down ms-3"></i></a>
                            <div class="dropdown-menu fade-down m-0">
                            <a class="dropdown-item py-4 px-lg-10 d-none d-lg-block" href='/login'>Log in</a>
                            <a class="dropdown-item py-4 px-lg-10 d-none d-lg-block" href='/register'>Sign up</a>   
                    </div>
            </div>
        </div>  
</nav>




