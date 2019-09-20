@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://avatars0.githubusercontent.com/u/8663561?s=460&v=4" style=" width:150px; height:150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
        <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>136</strong> Posts</div>
                <div class="pr-5"><strong>500</strong> Followers</div>
                <div class="pr-5"><strong>25</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">Sourav Roy</div>
            <div>Love Travels ❤🛫 <br> Life Is Too Short 😥 So Enjoy The Life 😎😍</div>
            <div><a href="">https://www.facebook.com/SOURAVROY.CSE</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fdac5-1.fna.fbcdn.net/vp/a410ec85cc067b069d60a715c5de273b/5E210AD6/t51.2885-15/sh0.08/e35/p640x640/62624649_425755188155469_3251401129364814040_n.jpg?_nc_ht=instagram.fdac5-1.fna.fbcdn.net&_nc_cat=109 640w,https://instagram.fdac5-1.fna.fbcdn.net/vp/922bb3aa79384535727aa555e39d596c/5E06E3D6/t51.2885-15/sh0.08/e35/p750x750/62624649_425755188155469_3251401129364814040_n.jpg?_nc_ht=instagram.fdac5-1.fna.fbcdn.net&_nc_cat=109 750w,https://instagram.fdac5-1.fna.fbcdn.net/vp/2e4cecae9fe071fbc60376302498c7c8/5E049720/t51.2885-15/e35/62624649_425755188155469_3251401129364814040_n.jpg?_nc_ht=instagram.fdac5-1.fna.fbcdn.net&_nc_cat=109 1080w"class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdac5-1.fna.fbcdn.net/vp/a410ec85cc067b069d60a715c5de273b/5E210AD6/t51.2885-15/sh0.08/e35/p640x640/62624649_425755188155469_3251401129364814040_n.jpg?_nc_ht=instagram.fdac5-1.fna.fbcdn.net&_nc_cat=109 640w,https://instagram.fdac5-1.fna.fbcdn.net/vp/922bb3aa79384535727aa555e39d596c/5E06E3D6/t51.2885-15/sh0.08/e35/p750x750/62624649_425755188155469_3251401129364814040_n.jpg?_nc_ht=instagram.fdac5-1.fna.fbcdn.net&_nc_cat=109 750w,https://instagram.fdac5-1.fna.fbcdn.net/vp/2e4cecae9fe071fbc60376302498c7c8/5E049720/t51.2885-15/e35/62624649_425755188155469_3251401129364814040_n.jpg?_nc_ht=instagram.fdac5-1.fna.fbcdn.net&_nc_cat=109 1080w"class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdac5-1.fna.fbcdn.net/vp/a410ec85cc067b069d60a715c5de273b/5E210AD6/t51.2885-15/sh0.08/e35/p640x640/62624649_425755188155469_3251401129364814040_n.jpg?_nc_ht=instagram.fdac5-1.fna.fbcdn.net&_nc_cat=109 640w,https://instagram.fdac5-1.fna.fbcdn.net/vp/922bb3aa79384535727aa555e39d596c/5E06E3D6/t51.2885-15/sh0.08/e35/p750x750/62624649_425755188155469_3251401129364814040_n.jpg?_nc_ht=instagram.fdac5-1.fna.fbcdn.net&_nc_cat=109 750w,https://instagram.fdac5-1.fna.fbcdn.net/vp/2e4cecae9fe071fbc60376302498c7c8/5E049720/t51.2885-15/e35/62624649_425755188155469_3251401129364814040_n.jpg?_nc_ht=instagram.fdac5-1.fna.fbcdn.net&_nc_cat=109 1080w"class="w-100">
        </div>
    </div>


</div>
@endsection
