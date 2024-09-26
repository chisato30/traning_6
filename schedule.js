document.addEventListener('DOMContentLoaded', function () {
    const hiddenItems = document.querySelector('#hiddenItems');
    const toggleButton = document.querySelector('#toggleSchedule');
    const scheduleGrid = document.querySelector('.schedule-grid');
    const backgroundSchedule = document.querySelector('.background_schedule_sp');

    if (!hiddenItems) console.error('hiddenItems not found');
    if (!toggleButton) console.error('toggleButton not found');
    if (!scheduleGrid) console.error('scheduleGrid not found');
    if (!backgroundSchedule) console.error('backgroundSchedule not found');

    if (!hiddenItems || !toggleButton || !scheduleGrid || !backgroundSchedule) {
        console.error('Required elements not found. Aborting script execution.');
        return;
    }

    function toggleSchedule() {
        if (window.innerWidth <= 390) {
            if (hiddenItems.style.display === 'none' || getComputedStyle(hiddenItems).display === 'none') {
                showSchedule();
            } else {
                hideSchedule();
            }
        }
    }

    function showSchedule() {
        hiddenItems.style.cssText = `
            display: flex !important;
            flex-direction: column !important;
            position: static !important;
            width: 100% !important;
            margin-top: -56px !important;
            row-gap: 8.5px !important;
            padding: 54px !important;
        `;
        toggleButton.src = 'image/Read less.png';
        toggleButton.alt = '';
        toggleButton.style.display = 'none';

        scheduleGrid.classList.add('expanded');
        backgroundSchedule.style.height = '1636px';
        backgroundSchedule.style.backgroundImage = 'url("image/AdobeStock_302690198 1.png")';

        const faqSection = document.querySelector('.faq_content').closest('section');
        const faqContent = document.querySelector('.faq_content');
        const faqTitle = document.querySelector('.faq_title');
        const qaTitleSp = document.querySelector('.qa_title_sp ');
        const footer = document.querySelector('.footer ');

        if (faqSection && hiddenItems && faqContent && faqTitle && qaTitleSp &&footer) {
            faqSection.style.cssText = `
            position: relative;
            z-index: 1;
            top: 0px;
            left: 0%;
            `;
            faqContent.style.cssText = `
            position: absolute;
            top: 195px;
            left: 31%;
            width: 269%;
            margin-bottom: 20px; 
            `;

            faqTitle.style.cssText = `
            top: 29.5%;
            width: 39%;
            left: 157%;
             `;

            qaTitleSp.style.cssText = `
            top: 33.5%;
            width: 197px;
            display: flex;
        position: absolute;
            left: 78.5%;
            max-width: 156%;
              `;

            footer.style.cssText = `
            top: 584%;
            height: 157px;
                `;

            hiddenItems.parentNode.insertBefore(faqSection, hiddenItems.nextSibling);
        }
    }

    function hideSchedule() {
        hiddenItems.style.cssText = 'display: none !important;';
        toggleButton.src = 'image/Read more.png';
        toggleButton.alt = 'スケジュールを表示';

        scheduleGrid.classList.remove('expanded');
        backgroundSchedule.style.height = '546px';
        backgroundSchedule.style.backgroundImage = 'none';

        const faqSection = document.querySelector('.faq_content').closest('section');
        if (faqSection) {
            document.querySelector('main').appendChild(faqSection);
        }
    }

    function handleResize() {
        if (window.innerWidth <= 390) {
            hideSchedule();
            toggleButton.style.display = 'block';
        } else {
            hiddenItems.style.cssText = '';
            toggleButton.style.display = 'none';
        }
    }

    toggleButton.addEventListener('click', toggleSchedule);
    window.addEventListener('resize', handleResize);

    handleResize();
});

