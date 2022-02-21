@includeFirst(['partials.card.template', 'partials.content'], [
  'title' => relevanssi_the_title($echo = false),
  'permalink' => $permalink,
  'thumbnail' => $thumbnail,
  'date' => $date,
  'excerpt' => $excerpt,
  'hashtag' => $hashtag,
  'category' => $category,
])
