var content = [
    { title: 'It' },
    { title: 'Engineering' },
    { title: 'Agriculture' },
    { title: 'Finance' },
    { title: 'Law' },
    { title: 'Science' }
];
$('.ui.search')
    .search({
        source: content
    });