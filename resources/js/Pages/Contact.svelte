<script context="module">
  import Layout from '@/Shared/Layout.svelte'
  export const layout = Layout
</script>

<script>
  export let title = null
  title = 'Contact'
  export let user
</script>


<svelte:head>
      <title>{title ? `${title} - Awesome App` : 'Awesome App'}</title>
</svelte:head>

<h1>Contact</h1>
<p>Hello {user = 'Alex'}, welcome to your first Inertia app!</p>
