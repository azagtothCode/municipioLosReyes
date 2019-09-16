var myEvents = [{
    date: 'Inicio',
    content: 'En sus orígenes la Paz perteneció a la región de los acolhuas,'
  },{
    date: '1529',
    content: 'Hernán Cortes recibió la donación de los territorios que integraron el marquesado del valle de Oaxaca'
  },{
    date: 'En este periodo ',
    content: 'surgen primeros pueblos para integrar al municipio: La Magdalena Atlicpac, San Sebastián Chimalpa, San Salvador Tecamachalco y los Reyes Acaquilpan.'
  },
  {
    date: 'Q3 - 2018',
    content: 'Lorem ipsum dolor sit amet'
  },
  {
    date: 'Q2 - 2017',
    content: 'Lorem ipsum dolor sit amet'
  },{
    date: 'Q2 - 2017',
    content: 'Lorem ipsum dolor sit amet'
  },{
    date: 'Q3 - 2017',
    content: 'Lorem ipsum dolor sit amet'
  },
  {
    date: 'Q3 - 2018',
    content: 'Lorem ipsum dolor sit amet'
  },{
    date: 'Q3 - 2017',
    content: 'Lorem ipsum dolor sit amet'
  },
  {
    date: 'Q3 - 2018',
    content: 'Lorem ipsum dolor sit amet'
  }
  
];

$('#my-timeline').roadmap(myEvents);

$('#my-timeline').roadmap(myEvents,{
    eventsPerSlide: 5 // default: 6
});

$('#my-timeline').roadmap(myEvents,{
    slide: 2 // default: 1
});

$('#my-timeline').roadmap(myEvents,{

    // default: 'prev'
    prevArrow: '<i class="material-icons">keyboard_arrow_left</i>',
  
    // default: 'next'
    nextArrow: '<i class="material-icons">keyboard_arrow_right</i>'
    
});

$('#my-timeline').roadmap(myEvents,{

    eventTemplate: '<li class="timeline__events__event">' +
                      '<div class="event">' +
                        '<div class="event__date">####DATE###</div>' +
                        '<div class="event__content">####CONTENT###</div>' +
                      '</div>' +
                    '</li>',
  
  });

  $('#my-timeline').roadmap(myEvents,{

    // auto, horizontal, vertical
    orientation: 'auto'
    
  });