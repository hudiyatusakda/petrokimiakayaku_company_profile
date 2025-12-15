$urls = @(
"https://www.youtube.com/watch?v=MJ18PSJNPRo",
"https://www.youtube.com/watch?v=NRDHjAwiM0A",
"https://www.youtube.com/watch?v=6MCmY_KyL6w",
"https://www.youtube.com/watch?v=XTS7P8lKY6g",
"https://www.youtube.com/watch?v=-dvkU_P_WxY"
)

for ($i = 0; $i -lt $urls.Length; $i++) {
    $url = $urls[$i]
    try {
        $response = Invoke-WebRequest -Uri $url -UseBasicParsing
        $content = $response.Content
        $titleMatch = [regex]::Match($content, '<title>(.*?) - YouTube</title>')
        $title = $titleMatch.Groups[1].Value
        $dateMatch = [regex]::Match($content, '"datePublished":"([^"]+)"')
        $date = $dateMatch.Groups[1].Value
        if ($date) {
            $parsedDate = [DateTime]::Parse($date).ToString("yyyy-MM-dd")
            Write-Output "$($i+1). $title - $parsedDate"
        } else {
            Write-Output "$($i+1). $title - Date not found"
        }
    } catch {
        Write-Output "$($i+1). Error fetching $url"
    }
}