const selectedItems = document.getElementById('selectedItems');
const options = document.querySelectorAll('.multiselect-options input[type="checkbox"]');

options.forEach(option => {
  option.addEventListener('change', () => {
    if (option.checked) {
      const tag = document.createElement('div');
      tag.className = 'selected-item';
      tag.textContent = option.parentElement.textContent.trim();
      selectedItems.appendChild(tag);
    } else {
      const tags = selectedItems.getElementsByClassName('selected-item');
      for (const tag of tags) {
        if (tag.textContent === option.parentElement.textContent.trim()) {
          selectedItems.removeChild(tag);
        }
      }
    }
  });
});