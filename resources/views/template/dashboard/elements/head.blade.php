<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/bootstrap.min.css') }} "> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"
    integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap');

    :root {
        --header-height: 4rem;
        --nav-width: 68px;
        --first-color: #000000;
        --first-color-light: #ffffff;
        --white-color: #F7F6FB;
        --body-font: 'Nunito', sans-serif;
        --normal-font-size: 1rem;
        --z-fixed: 100
    }

    *,
    ::before,
    ::after {
        box-sizing: border-box
    }

    body {
        position: relative;
        margin: var(--header-height) 0 0 0;
        padding: 0 1rem;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        transition: .5s
    }

    a {
        text-decoration: none !important;
    }

    .header {
        width: 100%;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        background-color: var(--white-color);
        z-index: var(--z-fixed);
        transition: .5s
    }

    .header_toggle {
        color: var(--first-color);
        font-size: 1.5rem;
        cursor: pointer
    }

    .header_img {
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        border-radius: 50%;
        overflow: hidden
    }

    .header_img img {
        width: 40px
    }

    .l-navbar {
        position: fixed;
        top: 0;
        left: -30%;
        width: var(--nav-width);
        height: 100vh;
        background-color: var(--first-color);
        padding: .5rem 1rem 0 0;
        transition: .5s;
        z-index: var(--z-fixed)
    }

    .nav-main {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden
    }

    .nav_logo,
    .nav_link {
        display: grid;
        grid-template-columns: max-content max-content;
        align-items: center;
        column-gap: 1rem;
        padding: .5rem 0 .5rem 1.5rem
    }

    .nav_logo {
        margin-bottom: 2rem
    }

    .nav_logo-icon {
        font-size: 1.25rem;
        color: var(--white-color)
    }

    .nav_logo-name {
        color: var(--white-color);
        font-weight: 700
    }

    .nav_link {
        position: relative;
        color: var(--first-color-light);
        margin-bottom: 1.5rem;
        transition: .3s;
        text-decoration: none;
    }

    .nav_link:hover {
        color: var(--white-color);
        background-color: var(--first-color-light);
    }

    .nav_link:hover>.nav_icon,
    .nav_link:hover>.nav_name {
        color: #000000;
    }

    .nav_icon {
        font-size: 1.25rem;
    }

    .show-nav {
        left: 0
    }

    .body-pd {
        padding-left: calc(var(--nav-width) + 1rem)
    }

    .active-nav {
        color: var(--white-color)
    }

    .active-nav::before {
        content: '';
        position: absolute;
        left: 0;
        width: 2px;
        height: 32px;
        background-color: var(--white-color)
    }

    .height-100 {
        height: 100vh;
        padding: 50px 50px;
    }

    .title-responsive {
        margin-bottom: 0 !important;
    }

    h1 {
        font-family: 'Outfit', sans-serif;
        font-weight: 200;
    }

    @media screen and (min-width: 768px) {
        body {
            margin: calc(var(--header-height) + 1rem) 0 0 0;
            padding-left: calc(var(--nav-width) + 2rem)
        }

        .header {
            height: calc(var(--header-height) + 1rem);
            padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
        }

        .header_img {
            width: 40px;
            height: 40px
        }

        .header_img img {
            width: 45px
        }

        .l-navbar {
            left: 0;
            padding: 1rem 1rem 0 0
        }

        .show-nav {
            width: calc(var(--nav-width) + 156px)
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 188px)
        }
    }

    @media screen and (max-width: 768px) {
        .title-responsive {
            font-size: 2rem;
        }

        .height-100 {
            padding: 50px 0px;
        }
    }

    .nav-tabs {
        border-bottom: 1px solid #000 !important;
    }

    .nav-tabs>.nav-item>.nav-link {
        background-color: #000 !important;
        color: #FFF !important;

        transition: 0.3s;

        outline: none !important;
    }

    .nav-tabs>.nav-item>.nav-link.active {
        background-color: #FFF !important;
        color: #000 !important;

        border-color: #000 #000 #fff !important;

        transition: 0.3s;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #000;
    }

    .table td,
    .table th {
        padding: .75rem;
        vertical-align: top;
        border-top: 0px solid #dee2e6;
    }

    .btn-outline-dark {
        color: #000 !important;
        border-color: #000 !important;
    }

    .btn-outline-dark:hover {
        color: #FFF !important;
        border-color: #000 !important;
        background-color: #000;
    }

    .card {
        border: 1px solid #000 !important;
    }

    .form-control:focus {
        border-color: #000 !important;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075)/*, 0 0 8px rgba(0, 0, 0, 0.308)*/ !important;
    }
</style>
