(function(){
  var button = document.querySelector('.nav-search-toggle');
  var panel = document.getElementById('site-search-panel');
  if (!button || !panel) return;
  button.addEventListener('click', function(){
    var open = panel.classList.toggle('is-open');
    button.setAttribute('aria-expanded', open ? 'true' : 'false');
    if (open) {
      var input = panel.querySelector('input[type="search"]');
      if (input) input.focus();
    }
  });
})();
