@extends('template/dashboard/layout')

@section('titulo_pestaña')
    Rony Boutique - Usuarios
@endsection

@section('usuarios')
    active-nav
@endsection

@section('header')
    Usuarios
    &nbsp;
@endsection

@section('titulo')
    Usuarios
@endsection

@section('descripcion')
    Desde aqui puedes ver, agregar, modificar o dar de baja a los usuarios disponibles.
@endsection

@section('contenido')
    <ul class="nav nav-tabs justify-content-center mt-5" id="myTab" role="tablist">
        <li class="nav-item mx-2" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item mx-2" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item mx-2" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Contact</button>
        </li>
    </ul>

    <div class="tab-content mt-5" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quia quas mollitia possimus ducimus cumque quis ut a consequatur distinctio. Praesentium molestias harum et nobis possimus in provident. Nulla, id!
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id error nulla quasi officia. Praesentium, ipsam soluta voluptas ab nisi blanditiis hic autem officiis explicabo, cum illum, necessitatibus numquam. Architecto, reprehenderit?Praesentium facere error eligendi! Illo aliquid eveniet, distinctio, quaerat porro autem quasi minus necessitatibus deleniti culpa reiciendis id ex nostrum cupiditate soluta odio perferendis eum voluptate enim ipsum, quam adipisci.
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, adipisci vitae ab et iusto minus porro ipsa voluptate quis quasi ut nemo fuga repellendus vel delectus aspernatur, ullam aut sit.
            Fugiat tempora deserunt accusamus nulla adipisci aliquid numquam laudantium! Temporibus nulla, magni perferendis hic fuga illo, sequi doloribus recusandae nisi sed labore? Cum reiciendis nam, molestiae totam natus placeat distinctio!
            Provident illo repellat atque voluptatibus molestiae totam dolore suscipit repudiandae maiores dicta, odio at similique quas, veritatis, sit vel ab omnis eos deleniti! Veniam eligendi iure a provident dicta iste?
        </div>
    </div>

    
@endsection
