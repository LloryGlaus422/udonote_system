

<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div>
    @include ('addSubject')
    <button class="add">
        Add Subject
    </button>
</div>
<div class="wrapper">
    <div class="parent" onclick="">
        <div class="child bg-one">
            <a href="#">English</a>
        </div>
    </div>

    <div class="parent right" onclick="">
        <div class="child bg-two">
            <a href="#">Math</a>
        </div>
    </div>

    <div class="parent" onclick="">
        <div class="child bg-three">
            <a href="#">Filipino</a>
        </div>
    </div>

    <div class="parent right" onclick="">
        <div class="child bg-four">
            <a href="#">Science</a>
        </div>
    </div>

    <div class="parent" onclick="">
        <div class="child bg-five">
            <a href="#">T.L.E</a>
        </div>
    </div>

    <div class="parent right" onclick="">
        <div class="child bg-six">
            <a href="#">MAPEH</a>
        </div>
    </div>
</div>
