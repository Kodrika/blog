const sidebar = new ApocSidebar(
    document.getElementById('sidebar'),
    {
        type: 'waterfallReverse',
        side: 'left',
        transitionTimingFunction: 'cubic-bezier(0.455, 0.03, 0.515, 0.955)',
        transitionDuration: '.2s',
        wallBackgroundColor: 'rgba(0,0,0,.3)'
    }
);
sidebar.init();
document.getElementById('trigger').addEventListener('click', () => {
    if (sidebar.isOpen()) {
        sidebar.close();
    } else {
        sidebar.open();
    }
});
