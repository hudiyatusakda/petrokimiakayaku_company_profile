$urls = @(
    "https://www.youtube.com/watch?v=MJ18PSJNPRo",
    "https://www.youtube.com/watch?v=NRDHjAwiM0A",
    "https://www.youtube.com/watch?v=6MCmY_KyL6w",
    "https://www.youtube.com/watch?v=XTS7P8lKY6g",
    "https://www.youtube.com/watch?v=-dvkU_P_WxY"
)

$i = 1
foreach ($url in $urls) {
    try {
        $response = Invoke-WebRequest -Uri $url -UseBasicParsing
        $content = $response.Content

        # Extract title
        $titleMatch = $content | Select-String -Pattern '<title>(.*?)</title>' -AllMatches
        $title = if ($titleMatch.Matches) { $titleMatch.Matches[0].Groups[1].Value } else { "Not found" }

        # Extract thumbnail
        $thumbMatch = $content | Select-String -Pattern 'property="og:image"\s+content="([^"]+)"' -AllMatches
        $thumbnail = if ($thumbMatch.Matches) { $thumbMatch.Matches[0].Groups[1].Value } else { "Not found" }

        # Extract upload date from JSON-LD
        $jsonMatches = $content | Select-String -Pattern '<script[^>]*type="application/ld\+json"[^>]*>(.*?)</script>' -AllMatches
        $date = "Not found"
        foreach ($match in $jsonMatches.Matches) {
            $json = $match.Groups[1].Value
            if ($json -match '"uploadDate"\s*:\s*"([^"]+)"') {
                $date = $matches[1]
                break
            }
        }

        Write-Host "$i. Title: $title"
        Write-Host "   Date: $date"
        Write-Host "   Thumbnail: $thumbnail"
        Write-Host ""
    } catch {
        Write-Host "$i. Error fetching $url : $($_.Exception.Message)"
        Write-Host ""
    }
    $i++
}