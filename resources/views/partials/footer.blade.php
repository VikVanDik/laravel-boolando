<footer>
    <div class="container flex foot">
      <div class="left-foot">
        <h4>Boolando S.R.L.</h4>
        <ul>
          <li
          v-for ="(info, index) in infos"
          :key="index"><a :href="info.href">INFO TEXT</a></li>

        </ul>
      </div>

      <div class="right-foot">
        <p class="search">Trovaci anche su</p>
        <ul class="flex">
          <li
          v-for ="(social, index) in socials"
          :key ="index"><a :href="social.href" v-html="social.icon"></a></li>

        </ul>
      </div>
    </div>
  </footer>
