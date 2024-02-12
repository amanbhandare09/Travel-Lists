
    const box1 = document.getElementById('box1');
    box1.onclick = () => {
    window.location.href = 'box_1.html';
    };

    const box2 = document.getElementById('box2');
    box2.onclick = () => {
    window.location.href = 'box_2.html';
    };

    const box3 = document.getElementById('box3');
    box3.onclick = () => {
    window.location.href = 'box_3.html';
    };
    //search implimentation
    
    const searchInput = document.querySelector('input[type="text"]');
    const searchButton = document.querySelector('button[type="button"]');
    const containers = document.querySelectorAll('.container');
    
    searchButton.addEventListener('click', () => {
      const searchTerm = searchInput.value.toLowerCase();
    
      for (const container of containers) {
        const h2Element = container.querySelector('h2');
        const text = h2Element.textContent.toLowerCase();
    
        if (text.includes(searchTerm)) {
          highlightContainer(container);
          scrollToContainer(container);
          break;
        } else {
          removeHighlight(container);
        }
      }
    });
    
    function highlightContainer(container) {
      container.style.border = '2px solid #ff0000';
    }
    
    function removeHighlight(container) {
      container.style.border = '';
    }
    
    function scrollToContainer(container) {
      container.scrollIntoView({ behavior: 'smooth' });
    }
    
    