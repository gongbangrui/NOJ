@extends('layouts.app')

@section('template')
<style>
    group-card {
        display: block;
        /* box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 30px; */
        border-radius: 4px;
        transition: .2s ease-out .0s;
        color: #7a8e97;
        background: #fff;
        /* padding: 1rem; */
        position: relative;
        border: 1px solid rgba(0, 0, 0, 0.15);
        margin-bottom: 2rem;
        overflow:hidden;
    }

    a:hover{
        text-decoration: none;
    }

    group-card:hover {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 30px;
    }

    group-card > div:first-of-type {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 61.8%;
    }

    group-card > div:first-of-type > shadow-div {
        display: block;
        position: absolute;
        overflow: hidden;
        top:0;
        bottom:0;
        right:0;
        left:0;
    }

    group-card > div:first-of-type > shadow-div > img{
        object-fit: cover;
        width:100%;
        height: 100%;
        transition: .2s ease-out .0s;
    }

    group-card > div:first-of-type > shadow-div > img:hover{
        transform: scale(1.2);
    }

    group-card > div:last-of-type{
        padding:1rem;
    }

    .cm-fw{
        white-space: nowrap;
        width:1px;
    }

    .pagination .page-item > a.page-link{
        border-radius: 4px;
        transition: .2s ease-out .0s;
    }

    .cm-group-name{
        color:#333;
        margin-bottom: 0;
    }

    .cm-tending,
    .cm-mine-group{
        color:rgba(0,0,0,0.54);
        margin-bottom: 1.5rem;
        font-weight: 500;
    }

    .cm-group-action{
        height: 4rem;
    }

</style>
<div class="container mundb-standard-container">
    <div>
        <p class="cm-tending"><i class="MDI fire wemd-red-text"></i>Group Setting</p>
    </div>
    <div>
        <p class="cm-mine-group">My Groups</p>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <a disable-href="/group/create">
                <group-card style="border-style: dashed;">
                    <div>
                        <shadow-div>
                            <img src="/static/img/group/addphoto.jpg">
                        </shadow-div>
                    </div>
                    <div>
                        <p class="cm-group-name">Group Setting</p>
                        <small class="cm-group-info">Click here to create your own group!</small>
                        <div class="cm-group-action">

                            </div>
                    </div>
                </group-card>
            </a>
        </div>
    </div>
    @endif
</div>
<script>

    window.addEventListener("load",function() {

    }, false);

</script>
@endsection
