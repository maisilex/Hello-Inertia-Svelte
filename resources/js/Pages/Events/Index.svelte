<script context="module">
  import Layout, { title, metaTitle } from '@/Shared/Layout.svelte'
  export const layout = Layout
</script>
  
<script>
  // TODO: 
  // import { inertia, page } from '@inertiajs/inertia-svelte'
  // import { route } from '@/Utils'
  // import Icon from '@/Shared/Icon.svelte'
  // import Pagination from '@/Shared/Pagination.svelte'
  // import SearchFilter from '@/Shared/SearchFilter.svelte'
  // export let contacts = []
  $title = 'Event Index'
  $metaTitle = 'Kykysa'
  // let filters = {
  //   trashed: $page.props.filters.trashed,
  // }
  export let event
</script>
  
<h1 class="text-6xl sm:text-8xl">{ event }</h1>