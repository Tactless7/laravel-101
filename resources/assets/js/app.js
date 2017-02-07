axios = require('axios');

(function(){

  let app = {
    url: null,
    init(){
      this.listeners();
    },
    listeners(){
      $('#restockButton').on('click', this.restock.bind(this));
      $('#sellButton').on('click', this.sell.bind(this));
    },
    restock(e){
      e.preventDefault();
      this.url = $('#restockForm').attr('action');
      this.ajaxRequest();
    },
    sell(e){
      e.preventDefault();
      this.url = $('#sellForm').attr('action');
      this.ajaxRequest();
    },
    ajaxRequest(){
      axios.post('/api' + this.url)
      .then(function(response){
        app.displayStock(response);
      })
      .catch(function(response){
      });
    },
    displayStock(response){
      $('#stock').html(response.data.stock);
    }

  };

  app.init();

})();
