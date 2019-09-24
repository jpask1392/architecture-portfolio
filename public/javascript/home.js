window.fullpage.initialize("#fullpage", {
	scrollingSpeed: 750
})

const onArrowClick = () => fullpage.moveSectionDown()

const onBacktoTopArrowClick = () => fullpage.moveTo(1)
