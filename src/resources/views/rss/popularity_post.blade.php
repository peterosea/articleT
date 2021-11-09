<rss version="2.0"
        xmlns:content="http://purl.org/rss/1.0/modules/content/"
        xmlns:wfw="http://wellformedweb.org/CommentAPI/"
        xmlns:dc="http://purl.org/dc/elements/1.1/"
        xmlns:atom="http://www.w3.org/2005/Atom"
        xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
        xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
        {!! do_action('rss2_ns') !!}
>
<channel>
        <title>{!! bloginfo_rss('name') !!} - Feed</title>
        <atom:link href="{!! self_link() !!}" rel="self" type="application/rss+xml" />
        <link>{!! bloginfo_rss('url') !!}</link>
        <description>{!! bloginfo_rss('description') !!}</description>
        <lastBuildDate>{!! mysql2date('D, d M Y H:i:s +0000', get_lastpostmodified('GMT'), false) !!}</lastBuildDate>
        <language>{!! get_option('rss_language') !!}</language>
        <sy:updatePeriod>{!! apply_filters( 'rss_update_period', 'hourly' ) !!}</sy:updatePeriod>
        <sy:updateFrequency>{!! apply_filters( 'rss_update_frequency', '1' ) !!}</sy:updateFrequency>
        {!! do_action('rss2_head') !!}
        @while($posts->have_posts()) @php($posts->the_post())
                <item>
                        <title>{!! the_title_rss() !!}</title>
                        <link>{!! the_permalink_rss() !!}</link>
                        <pubDate>{!! mysql2date('D, d M Y H:i:s +0000', get_post_time('Y-m-d H:i:s', true), false) !!}</pubDate>
                        <dc:creator>{!! the_author() !!}</dc:creator>
                        <guid isPermaLink="false">{!! the_guid() !!}</guid>
                        <description><![CDATA[{!! the_excerpt_rss() !!}]]></description>
                        <content:encoded><![CDATA[{!! the_excerpt_rss() !!}]]></content:encoded>
                        {!! rss_enclosure() !!}
                        {!! do_action('rss2_item') !!}
                </item>
        @endwhile
</channel>
</rss>