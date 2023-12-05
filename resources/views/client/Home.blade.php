
@extends('client_layout.master')  <!-- Hérite tout ce qui est dans le dossier client_layout.master-->

@section('title')
   Home
@endsection


@section('content')  <!-- Le contenu dynamique-->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="fontend/images/a.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue à <br> EN APARTÉ</strong></h1>
                            <p class="m-b-40" style="font-size: 25px"> Détendez-vous et revitalisez votre esprit avec nos massages exclusifs chez En Aparté. Laissez nos experts vous offrir une expérience de
                                bien-être inoubliable. <br> Institut de branté et de bien-être, de luxe,  qui priorise la qualité pour ses clients. </p>
                            <p><a class="btn hvr-hover" href="#">Prendre Rendez-vous</a></p>


                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="fontend/images/Enparter.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue à <br> EN APARTÉ</strong></h1>
                            <p class="m-b-40" style="font-size: 25px"> Transformez vos cheveux avec nos soins capillaires d'élite chez En Aparté. Des produits haut de gamme pour une chevelure éclatante. <br> Institut de branté et de bien-être, de luxe,  qui priorise la qualité pour ses clients. </p>
                            <p><a class="btn hvr-hover" href="#">Prendre Rendez-vous</a></p>
                        </div>

                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="fontend/images/Enparter4.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue à <br> EN APARTÉ</strong></h1>
                             <p class="m-b-40" style="font-size: 25px"> Découvrez l'excellence en soins de la peau chez En Aparté. Des produits luxueux, soigneusement sélectionnés pour sublimer votre beauté naturelle
                             <br> Institut de branté et de bien-être, de luxe,  qui priorise la qualité pour ses clients. </p>
                            <p><a class="btn hvr-hover" href="#">Voir nos produits de soins</a></p>


                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="fontend/images/Enparter.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Soins Capillaires Professionnels
                            <p>Prendre Rendez-vous</p>
                        </a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="fontend/images/Enparter2.jpg" alt="" />
                        <a class="btn hvr-hover" href="#"> Massages Relaxants & Soins du Visage
                            <p>Prendre Rendez-vous</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="fontend/images/Enparter4.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Produit de soins
                           <p>Prendre Rendez-vous</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="fontend/images/promo3.jpg" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="fontend/images/promo2.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>🌸l'Univers des produits EN APARTÉ - Éclat Naturel, Soin Profond 🌸</h1>
                        <h3>Découvrez notre collection exquise de produits de soins capillaires,
                            du visage et du corps, conçus pour révéler la beauté naturelle qui réside en vous</h3>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Vente</p>
                            </div>
                            <img src="fontend/images/produit1.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Ajouter au panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Fluide visage apaisant</h4>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Vente</p>
                            </div>
                            <img src="fontend/images/produit6.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Ajouter au panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Fluide visage apaisant</h4>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Vente</p>
                            </div>
                            <img src="fontend/images/produit3.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Ajouter au panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Fluide visage apaisant</h4>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Vente</p>
                            </div>
                            <img src="fontend/images/produit4.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Ajouter au panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Fluide visage apaisant</h4>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Vente</p>
                            </div>
                            <img src="fontend/images/produit5.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Ajouter au panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Fluide visage apaisant</h4>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="fontend/images/produit6.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Ajouter au panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Fluide visage apaisant</h4>
                            <h5> $9.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Vente</p>
                            </div>
                            <img src="fontend/images/produit7.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Ajouter au panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Fluide visage apaisant</h4>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Vente</p>
                            </div>
                            <img src="fontend/images/produit1.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Ajouter au panier</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Fluide visage apaisant</h4>
                            <h5> $15.79</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>🌸Soins de Beauté🌸</h1>
                        <h3>Bienvenue chez EN APARTÉ - Où la Personnalisation Rencontre la Profondeur du Soin</h3>
                        <p>Chez EN APARTÉ, nous avons créé une expérience axée sur la personnalisation et l'expertise,
                            mettant en avant trois catégories essentielles pour sublimer votre beauté naturelle.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                         <a href="">   <img class="img-fluid" src="fontend/images/Massage2.jpg" alt="" /> </a>
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Massages Relaxants du Corps</h3>
                                <p>
                                    Laissez-vous emporter par une expérience de détente totale avec nos massages relaxants du corps. Nos thérapeutes experts utilisent des
                                    techniques apaisantes pour libérer les tensions, vous offrant une évasion sensorielle bien méritée.
                                </p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                          <a href=""> <img class="img-fluid" src="fontend/images/SoinsCapillaire2.jpg" alt="" /></a>
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Soins Capillaires Professionnels</h3>
                                <p>Plongez dans l'excellence des soins capillaires professionnels. Nos praticiens qualifiés vous offriront des traitements adaptés, allant
                                     des massages du cuir chevelu aux soins nourrissants, pour des cheveux sains et éclatants</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                          <a href=""> <img class="img-fluid" src="fontend/images/SoinsCapillaire1.jpg" alt="" /> </a>
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3> Soins du Visage Personnalisés</h3>
                                <p>
                                    Découvrez l'art du soin du visage personnalisé, conçu pour répondre aux besoins spécifiques de votre peau.
                                    Laissez nos experts créer une expérience unique qui revitalise et révèle la beauté naturelle de votre visage.
                                </p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->


@endsection
