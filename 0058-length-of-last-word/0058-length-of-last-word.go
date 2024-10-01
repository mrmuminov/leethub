func lengthOfLastWord(s string) int {
	l := len(s)
	wc := 0
	for i := l - 1; i >= 0; i-- {
		if s[i] != 32 {
			wc++
		} else {
			if wc > 0 {
				return wc
			}
		}
	}
	return wc
}