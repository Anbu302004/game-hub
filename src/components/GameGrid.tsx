import { SimpleGrid } from "@chakra-ui/react";
import useGames from "../hooks/useGames";
import GameCard from "./GameCard";
import GameCardSkeleton from "./GameCardSkeleton";
import GameCardContainer from "./GameCardContainer";
import { Genre } from "../hooks/useGenres";
import { Platform } from "../hooks/useGames";

interface Props {
  selectedGenre: Genre | null;
  selectedPlatform: Platform | null;
}

const GameGrid = ({selectedGenre, selectedPlatform}: Props) => {
  const { data, error, isLoading } = useGames(selectedGenre, selectedPlatform);
  const Skeleton = [1, 2, 3, 4, 5, 6];

  return (
    <>
      {error && <p style={{ color: "white" }}>{error}</p>}
      <SimpleGrid columns={{ sm: 1, md: 2, lg: 3,    }} padding="10px" spacing={5}>
        {isLoading &&
          Skeleton.map((skeleton) => (
            <GameCardContainer key={skeleton}>
              <GameCardSkeleton />
            </GameCardContainer>
          ))}
        {data.map((game) => (
          <GameCardContainer key={game.id}>
            <GameCard game={game} />
          </GameCardContainer>
        ))}
      </SimpleGrid>
    </>
  );
};

export default GameGrid;
