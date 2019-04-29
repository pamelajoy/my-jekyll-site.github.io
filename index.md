---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: default
title: Home
bg-color: primary
---
<main>
  <header class="container">
    <div class="m-4 border border-dark rounded-special" style="background-image: url(https://placeimg.com/1000/480/animals); height: 60vh; background-size: cover; background-repeat: no-repeat; background-position: center center;">
    </div>
  </header>
  <section style="margin: 6rem 0 8rem;">
    <div class="d-inline-flex" style="overflow: hidden; width: 100%; margin-bottom: 4rem;">
      <div class="animate-ticker js-ticker">
        <h3 class="p text-uppercase">latest&nbsp;releases&nbsp;</h3>
      </div>
    </div>
    <div class="container">
      <div class="row">
        {% include album.html %}
        {% include album.html %}
        {% include album.html %}
      </div>
    </div>
  </section>
  <section style="margin: 6rem 0 8rem;">
    <div class="d-inline-flex" style="overflow: hidden; width: 100%; margin-bottom: 4rem;">
      <div class="animate-ticker js-ticker">
        <h3 class="p text-uppercase">news&nbsp;</h3>
      </div>
    </div>
    <div class="container">
      <div class="row display-flex justify-content-center">
        {% include news.html %}
        {% include news.html %}
      </div>
    </div>
  </section>
</main>
