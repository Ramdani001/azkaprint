
<div class="navbar grid grid-cols-2 text-white bg-blue-900  drop-shadow-md fixed top-0 z-50">
  <div class="">
    <a class="btn btn-ghost normal-case text-xl">Azkaprint</a>
  </div>
  <label class="swap swap-rotate lg:hidden justify-end">
  
    <!-- this hidden checkbox controls the state -->
    <input type="checkbox" />
    
    <!-- hamburger icon -->
    
    <svg onclick="openmenu()" class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z"/></svg>

    <!-- close icon -->
    <svg onclick="openmenu()" class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49"/></svg>
    
</label>
  <div id="menu" class="lg:justify-end hidden">
    <ul class="menu lg:menu-horizontal menu-vertical p-0">
      <li><a href="#">Home</a></li>
      <li><a href="#about">About</a></li>
      <li tabindex="0">
        <a href="#produk"> Produk </a>
      </li>
      <li><a href="#testimoni">Testimoni</a></li>
      <li><a href="#contact">Contact Us</a></li>
    </ul>
  </div>
</div>

{{-- Javascript --}}
<script src="">
  function openmenu() {
    document.getElementById('menu').classList.toggle('hidden') 
  }
</script>
{{-- End Navbar --}}

