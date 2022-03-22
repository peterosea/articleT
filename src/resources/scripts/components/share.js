function kakao() {
  const linkBtns = document.querySelectorAll('#share-kakao');
  if (!linkBtns) return;
  window.Kakao.init('b102ff29347c2bef13ed6a399a06c633');
  linkBtns.forEach(linkBtn => {
    const content = {
      title: linkBtn.dataset.title,
      description: linkBtn.dataset.description,
      imageUrl: linkBtn.dataset.imageurl,
      link: {
        webUrl: linkBtn.dataset.link, // 카카오 PC에서 확인할 때 연결될 웹 url
        mobileWebUrl: linkBtn.dataset.link, // 카카오 앱에서 확인할 때 연결될 웹 url
      },
    };
    window.Kakao.Link.createDefaultButton({
      container: linkBtn, // 공유하기 기능을 부여할 DOM container
      objectType: 'feed', // 피드타입
      content,
    });
  })
}

export default () => {
  kakao();
};
