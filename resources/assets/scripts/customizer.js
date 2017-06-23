
wp.customize('blogname', (value) => {
  value.bind(to => document.querySelector('.brand-name').textContent = to);
});

wp.customize('blogdescription', (value) => {
  value.bind(to => document.querySelector('.brand-description').textContent = to);
});
