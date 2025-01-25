import links from '$lib/utils/data.js';

export function load() {
  const page = links.find((link) => link.href === '/links');
  const subnav = page.subnav;

  return {
    page: page,
    subNav: subnav
  };
}
