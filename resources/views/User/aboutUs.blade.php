<!DOCTYPE html>
<html lang="en">

@include('Template/head')

<body>
    @include('Template/userNavbar')

    <div class="text-center">
        <h1 id="subtext1">About Us</h1>
    </div>

    <!-- Main Div -->
    <div class="aboutus-main d-md-flex justify-content-center row-cols-md-4 align-items-start" style="margin: 5%;">
        <!-- Profile 1 -->
        <div class="card d-flex flex-column justify-content-center text-center">
            <!-- Picture -->
            <div class="profile-frame d-flex flex-row justify-content-center">
                <img src="{{asset('img/aboutUs/steven.jpg')}}" class="profile-img">
            </div>

            <!-- Name -->
            <div>
                <h2 class="aboutus-name">Steven Lie</h2>
            </div>

            <!-- Desc -->
            <div>
                <i class="aboutus-nim">000000XXXXX</i> <br><br>
                Test <br>
                Test <br>
                Test <br>
            </div>
        </div>

        <!-- Profile 2 -->
        <div class="card d-flex flex-column justify-content-center text-center">
            <!-- Picture -->
            <div class="profile-frame d-flex flex-row justify-content-center">
                <img src="{{asset('img/aboutUs/jerry.jpg')}}" class="profile-img" onmouseover="hover(this);" onmouseout="unhover(this);">
            </div>

            <!-- Name -->
            <div>
                <h2 class="aboutus-name">Jerry Arianto</h2>
            </div>

            <!-- Desc -->
            <div>
                <i class="aboutus-nim">000000XXXXX</i> <br><br>
                Test <br>
                Test <br>
                Test <br>
            </div>
        </div>

        <!-- Profile 3 -->
        <div class="card d-flex flex-column justify-content-center text-center">
            <!-- Picture -->
            <div class="profile-frame d-flex flex-row justify-content-center">
                <img src="{{asset('img/aboutUs/michael.jpg')}}" class="profile-img">
            </div>

            <!-- Name -->
            <div>
                <h2 class="aboutus-name">Michael Krisna Cahyadi</h2>
            </div>

            <!-- Desc -->
            <div>
                <i class="aboutus-nim">000000XXXXX</i> <br><br>
                Test <br>
                Test <br>
                Test <br>
            </div>
        </div>

        <!-- Profile 4 -->
        <div class="card d-flex flex-column justify-content-center text-center">
            <!-- Picture -->
            <div class="profile-frame d-flex flex-row justify-content-center">
                <img src="{{asset('img/aboutUs/joy.jpg')}}" class="profile-img">
            </div>

            <!-- Name -->
            <div>
                <h2 class="aboutus-name">Jonathan Franzeli</h2>
            </div>

            <!-- Desc -->
            <div>
                <i class="aboutus-nim">000000XXXXX</i> <br><br>
                Test <br>
                Test <br>
                Test <br>
            </div>
        </div>
    </div>

    @include('Template/script')
</body>

</html>