func lengthOfLastWord(s string) int {
	wc := 0
	for i := len(s) - 1; i >= 0; i-- {
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