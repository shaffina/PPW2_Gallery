@extends('auth.master')

@section('content')

<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic|Open+Sans:300,400,500,700|Waiting+for+the+Sunrise|Shadows+Into+Light' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="wrapper clearfix">
  <div class="left">

    <div class="name-hero">

      <div class="me-img"></div>
      <br>
      <div class="name-text">

        <h1>Shaffina <em>Dewi</em></h1>
        <p>Yogyakarta, Indonesia, 55291</p>
        <p>shaffinadewi@gmail.com</p>
        <p>(+62) 81325064116</p>

      </div>

    </div>

  </div>
  <div class="right">

    <div class="inner">
        <section>
        <h1>About Me</h1>
        <p>Active student of Software Engineering Technology from Gadjah Mada University with a strong interest in graphic design. 
            I am passionate about combining my technical skills with creativity to create visually appealing designs. 
            Currently, I am seeking opportunities to apply my software engineering knowledge and develop my skills further in the field of graphic design.</p>
      </section>
      <section>
        <h1>Education</h1>
        <p>2019 - 2022</p>
        <p><em>SMA Muhammadiyah 1 Yogyakarta  </em></p>
        <p>Science</p>
        <p>2022 - present </p>
        <p><em>Gadjah Mada University</em></p>
        <p>Software Engineering</p>
      </section>
      <section>
        <h1>Experience</h1>
        <p>2020</p>
        <p><em>TALKSHOW WITH SHERLY ANNAVITA RAHMI</em></p>
        <p>Coordinating committee members, developing thorough plans, working with set deadlines.</p>
        <p>2020 </p>
        <p><em>MOEHI NATIONAL COMPETITION #5</em></p>
        <p>Strong teamwork, maintaining effective communication with other committee members.</p>
      </section>
      <section>
        <h1>Technical Skills</h1>
        <ul class="skill-set">
          <li>Android Studio</li>
          <li>Python</li>
          <li>Java</li>
          <li>Adobe Illustrator</li>
          <li>Graphic Design</li>
          <li>HTML5</li>
          <li>CSS3</li>
          <li>MySql</li>
          <li>UI Design</li>
          <li>Figma</li>
          <li>Web Design</li>
        </ul>
      </section>
      <section>
        <h1>Personal Interests</h1>
        <ul class="skill-set">
          <li>Music</li>
          <li>Reading</li>
          <li>Playing Guitar</li>
          <li>Travelling</li>
        </ul>
      </section>
      <section>
        <div class="handmade">
          <p>template by <em> Anthony Adamski</em></p>
        </div>
      </section>
    </div>

  </div>
</div>
@endsection
