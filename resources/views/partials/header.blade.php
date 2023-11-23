<header>
    <div class="container flex head">
      <ul>
        <li
        v-for = "(unit, index) in units"
        :key ="index"><a :href="unit.href"></a></li>
      </ul>

      <img src="../assets/img/boolean-logo.png" alt="Logo" class="logo">

      <ul>
        <li
        v-for = "(icon, index) in icons"
        :key = "index"><a :href="icon.href" v-html="icon.iconName"></a></li>

      </ul>

    </div>
  </header>

