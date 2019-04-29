---
layout: default
title: News
permalink: /news/
bg-color: secondary
---
<main>
  <section class="py-4 d-inline-flex js-tickerWrapper" style="overflow: hidden; width: 100%;">
    <div class="animate-ticker js-ticker">
      <h3 class="p text-uppercase">news&nbsp;</h3>
    </div>
  </section>
  <section style="margin: 6rem 0 8rem">
    <div class="container">
      <div class="row display-flex justify-content-center">
        {% include news.html %}
        {% include news.html %}
      </div>
    </div>
  </section>

</main>
