<script>
  import { inertia } from '@inertiajs/inertia-svelte'
</script>

<div>
  <h1>This is the welcome page</h1>
  <a href="/about" use:inertia>About</a>   
  <a href="/contact" use:inertia>Contact</a>
</div>