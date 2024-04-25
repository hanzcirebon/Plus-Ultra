<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skill Up Zone</title>
  @include('header')
</head>
<style>
  .soft-skills-section {
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 11px 33px 80px;
  }

  @media (max-width: 991px) {
    .soft-skills-section {
      padding: 0 20px;
    }
  }

  .section-title {
    color: #7c76bb;
    text-align: center;
    margin-top: 21px;
    font: 700 64px Urbanist, sans-serif;
  }

  @media (max-width: 991px) {
    .section-title {
      font-size: 40px;
    }
  }

  .section-description {
    color: #1a1a1a;
    text-align: center;
    margin-top: 70px;
    max-width: 1090px;
    font: 300 30px Roboto, sans-serif;
  }

  @media (max-width: 991px) {
    .section-description {
      margin-top: 40px;
    }
  }

  .cta-button {
    border-radius: 100px;
    background-color: #ada8d6;
    margin-top: 46px;
    width: 261px;
    max-width: 100%;
    color: #0d0d0d;
    text-align: center;
    letter-spacing: 0.2px;
    padding: 33px 60px;
    font: 700 16px/140% Urbanist, sans-serif;
    cursor: pointer;
  }

  @media (max-width: 991px) {
    .cta-button {
      margin-top: 40px;
      padding: 33px 20px;
    }
  }

  .button {
    all: unset;
    display: flex;
    align-items: center;
    position: relative;
    padding: 0.6em 2em;
    border: rgba(124, 118, 187, 1) solid 0.15em;
    margin-bottom: 20px;
    border-radius: 0.25em;
    color: rgba(124, 118, 187, 1);
    font-size: 1.5em;
    font-weight: 600;
    cursor: pointer;
    overflow: hidden;
    transition: border 300ms, color 300ms;
    user-select: none;
  }

  .button p {
    z-index: 1;
  }

  .button:hover {
    color: #212121;
  }

  .button:active {
    border-color: rgba(124, 118, 187, 1);
  }

  .button::after,
  .button::before {
    content: "";
    position: absolute;
    width: 9em;
    aspect-ratio: 1;
    background: rgba(124, 118, 187, 1);
    opacity: 50%;
    border-radius: 50%;
    transition: transform 500ms, background 300ms;
  }

  .button::before {
    left: 0;
    transform: translateX(-8em);
  }

  .button::after {
    right: 0;
    transform: translateX(8em);
  }

  .button:hover:before {
    transform: translateX(-1em);
  }

  .button:hover:after {
    transform: translateX(1em);
  }

  .button:active:before,
  .button:active:after {
    background: rgba(124, 118, 187, 1);
  }
</style>

<body>
@include('navbar')
  <section class="soft-skills-section">
    <h1 class="section-title">Master soft skills to create a more perfect you</h1>
    <p class="section-description">
      In today's highly competitive modern society, in addition to technical skills, soft skills are also the key to
      success. Teamwork, problem-solving skills, and communication skills, these soft skills determine a person's
      performance and achievements in work and life.
    </p>
    <a href="/soft-skill/mpss"><button class="button">
        <p>Skill Up Zone</p>
      </button></a>
  </section>
</body>

</html>