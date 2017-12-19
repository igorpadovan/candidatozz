var app = new Vue({
  el: '#candidatozz',
  data: {
    name: '',
    phone: '',
    city: '',
    state: '',
    candidates: []
  },
  created: function() {
    this.getCandidates();
  },
  methods: {
    getCandidates: function() {
      var $vm = this;
      $.ajax({
        context: this,
        url: "/api/v1/candidate",
        success: function (result) {
          $vm.candidates = result;
        }
      })
    },
    onCreate: function(e) {
      e.preventDefault()
      $.ajax({
        context: this,
        type: "POST",
        data: {
          name: this.name,
          phone: this.phone,
          city: this.city,
          state: this.state
        },
        url: "/api/v1/candidate",
        success: function(result) {
          this.candidates.push(result);
          this.name = ''
          this.phone = ''
          this.city = ''
          this.state = ''
        }
      })
    },
    onDelete: function (candidate) {
      $.ajax({
        context: candidate,
        type: "DELETE",
        url: "/api/v1/candidate/" + candidate.id,
      })

      this.candidates.$remove(candidate);
    }
  }
})