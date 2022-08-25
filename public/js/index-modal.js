"use strict";



// add kategori kostumer
$("#add-data-tanaman").fireModal({
  title: 'Tambah',
  body: $("#form-input-data-tanaman"),
  footerClass: 'bg-whitesmoke',
  autoFocus: false,
  onFormSubmit: function(modal, e, form) {
    // Form Data
    let form_data = $(e.target).serialize();
    console.log(form_data)

    // DO AJAX HERE
    let fake_ajax = setTimeout(function() {
      form.stopProgress();
      modal.find('.modal-body').prepend('<div class="alert alert-info">Please check your browser console</div>')

      clearInterval(fake_ajax);
    }, 1500);

    e.preventDefault();
  },
  shown: function(modal, form) {
    console.log(form)
  },
  buttons: [
    {
      text: 'Save',
      submit: true,
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});


// add data kostumer 1
$("#add-data-costumer").fireModal({
  title: 'Tambah meja',
  body: $("#form-input-data-costumer"),
  footerClass: 'bg-whitesmoke',
  autoFocus: false,
  onFormSubmit: function(modal, e, form) {
    // Form Data
    let form_data = $(e.target).serialize();
    console.log(form_data)

    // DO AJAX HERE
    let fake_ajax = setTimeout(function() {
      form.stopProgress();
      modal.find('.modal-body').prepend('<div class="alert alert-info">Please check your browser console</div>')

      clearInterval(fake_ajax);
    }, 1500);

    e.preventDefault();
  },
  shown: function(modal, form) {
    console.log(form)
  },
  buttons: [
    {
      text: 'Save',
      submit: true,
      class: 'btn btn-primary btn-shadow',
      handler: function(modal) {
      }
    }
  ]
});


// let modal_3_body = '<p>Object to create a button on the modal.</p><pre class="language-javascript"><code>';
// modal_3_body += '[\n';
// modal_3_body += ' {\n';
// modal_3_body += "   text: 'Login',\n";
// modal_3_body += "   submit: true,\n";
// modal_3_body += "   class: 'btn btn-primary btn-shadow',\n";
// modal_3_body += "   handler: function(modal) {\n";
// modal_3_body += "     alert('Hello, you clicked me!');\n"
// modal_3_body += "   }\n"
// modal_3_body += ' }\n';
// modal_3_body += ']';
// modal_3_body += '</code></pre>';

$("#add-tanaman").fireModal({
  title: 'Tambah Tanaman',
  body: $("#form-input-tanaman"),
});

$("#add-kategori").fireModal({
  title: 'Tambah kategori',
  body: $("#form-input-kategori"),
});

$("#add-data-outlet").fireModal({
  title: 'Tambah outlet',
  body: $("#form-input-outlet"),
});

$("#add-data-jurnal").fireModal({
  title: 'Tambah jurnal',
  body: $("#form-input-jurnal"),
});


// jenis menu
$("#add-jenis-menu").fireModal({
  title: 'Input jenis menu',
  body: $("#form-input-jenis-menu"),
  buttons: [
    {
      text: 'Simpan',
      class: 'btn btn-primary btn-shadow',
      
    }
  ]
});

$("#input-data-bahan").fireModal({
  title: 'Input data bahan',
  body: $("#form-input-data-bahan"),
  buttons: [
    {
      text: 'Simpan',
      class: 'btn btn-primary btn-shadow',
      
    }
  ]
});

// bahan resep
$("#input-bahan-resep").fireModal({
  title: 'Input bahan',
  body: $("#form-input-bahan-resep"),
  buttons: [
    {
      text: 'Simpan',
      class: 'btn btn-primary btn-shadow',
      
    }
  ]
});


// $("#modal-1").fireModal({body: 'Modal body text goes here.'});
// $("#modal-2").fireModal({body: 'Modal body text goes here.', center: true});

// $("#modal-4").fireModal({
//   footerClass: 'bg-whitesmoke',
//   body: 'Add the <code>bg-whitesmoke</code> class to the <code>footerClass</code> option.',
//   buttons: [
//     {
//       text: 'No Action!',
//       class: 'btn btn-primary btn-shadow',
//       handler: function(modal) {
//       }
//     }
//   ]
// });






// $("#modal-6").fireModal({
//   body: '<p>Now you can see something on the left side of the footer.</p>',
//   created: function(modal) {
//     modal.find('.modal-footer').prepend('<div class="mr-auto"><a href="#">I\'m a hyperlink!</a></div>');
//   },
//   buttons: [
//     {
//       text: 'No Action',
//       submit: true,
//       class: 'btn btn-primary btn-shadow',
//       handler: function(modal) {
//       }
//     }
//   ]
// });

// $('.oh-my-modal').fireModal({
//   title: 'My Modal',
//   body: 'This is cool plugin!'
// });